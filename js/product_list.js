
const showResults = d => {
    $(".productlist").html(
        d.error ? d.error :
            d.result.length ? listItemTemplate(d.result) :
                'No Results');
}

query({ type: 'example_all' }).then(showResults);



$(document).ready(() => {

    $("#product-search").on("submit", function (e) {
        e.preventDefault();
        let search = $(this).find("input").val();
        query({ type: 'product-search', search: search }).then(showResults);
    })
    $("[data-filter]").on("click", function (e) {
        let column = $(this).data("filter");
        let value = $(this).data("value");
        query(
            value == "" ? { type: 'example_all' } :
                { type: 'product_filter', column: column, value: value }
        ).then(showResults)
    })
    $(".js-sort").on("change", function (e) {
        (
            this.value == 1 ? query({ type: 'product-sort', column: 'price', dir: 'DESC' }) :
                this.value == 2 ? query({ type: 'product-sort', column: 'price', dir: 'ASC' }) :
                    query({ type: 'example_all' })
        ).then(showResults);
    })
})


