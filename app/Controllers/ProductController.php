<?php

namespace App\Controllers;

use App\Exceptions\MySQLErrorConnectionException;
use Config\Database;

class ProductController extends Controller
{
    protected $limit = 3;
    protected $page;

    public function index($page = 1)
    {
        $this->page = $page;
        $offset = ($page * $this->limit) - $this->limit;
        $sql = "SELECT
            test_1_product.id,
            test_1_product.category_id as product_category_id,
            test_1_product.title,
            test_1_product.price,
            test_1_category.category_id as category_id,
            test_1_category.name
            FROM test_1_product
                INNER JOIN test_1_category ON test_1_product.category_id = test_1_category.category_id
            WHERE test_1_category.name = 'Leather Cases'
            ORDER BY test_1_product.title ASC
            LIMIT ". $this->limit ." OFFSET ". $offset;
        $result = $this->connection->query($sql);
        $products = array();
        while($row =mysqli_fetch_assoc($result))
        {
            $products[] = $row;
        }

        $sql = "SELECT COUNT(test_1_product.id) as product_count, test_1_product.category_id as product_category_id, test_1_category.category_id, test_1_category.name
            FROM test_1_product
                INNER JOIN test_1_category ON test_1_product.category_id = test_1_category.category_id
            WHERE test_1_category.name = 'Leather Cases'
            GROUP BY test_1_product.category_id";
        $query = $this->connection->query($sql);
        $product_count = mysqli_fetch_assoc($query)['product_count'];
        $total_page = ceil(($product_count / $this->limit));
        $pagination = [
            'current_page' => (int) $page,
            'per_page ' => $this->limit,
            'total_page' => (int) $total_page,
        ];
        $data = [
            'products' => $products,
            'pagination' => $pagination,
        ];
        return $this->response($data);
    }
}
