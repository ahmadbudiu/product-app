
const apiUrl = '//localhost/alumagubi/api.php';

const loadData = (page = 1) => {
    axios.get(apiUrl + '?p=' + page).then((response) => {
        $('tbody').html('');
        const products = response.data.products;
        for(var i = 0; i < products.length; i++)
        {
            $('tbody').append('<tr><td>'+ products[i].title +'</td><td>'+ products[i].name +'</td><td>'+ products[i].price +'</td></tr>')
        }
        const pagination = generatePagination(response.data.pagination);
        $('.pagination').html('');
        for (var i = pagination.start; i <= pagination.end; i++) {
            if (i === pagination.current) {
                $('.pagination').append('<li class="page-item active cursor-pointer"><span class="page-link">'+ i +'</span></li>');
            } else {
                $('.pagination').append('<li class="page-item cursor-pointer"><a class="page-link" onclick="loadData('+ i +')">'+ i +'</a></li>');
            }
        }
    });
    const url = new URL(window.location);
    url.searchParams.set('p', page);
    history.pushState({}, '', url);
}

const generatePagination = (pagination) => {
    let start = 1;
    let end = pagination.total_page;
    const distance = 3;
    if (pagination.current_page - distance > 1) {
        start = pagination.current_page - distance;
    }
    if (pagination.current_page + distance < end) {
        end = pagination.current_page + distance;
    }
    return {
        start: start,
        end: end,
        current: pagination.current_page,
    }
}

window.onload = loadData(page);
