(() => {
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);
    
    const line = $('.hasClick .tab-items__line');
    const tabItems = $$('.hasClick .tab-item');

    var count = tabItems.length; // Number of tab item
    var tabUIWidth = tabItems[0].parentElement.offsetWidth; // Width
    line.style.width = tabUIWidth/count + "px"; // width line

    tabItems.forEach((item, index) => {
        item.style.width=tabUIWidth/count;
        item.onclick = (event) => {
            if (!event.target.classList.contains('tab--active')){
                $('.hasClick .tab-item.tab--active').classList.remove('tab--active');
                event.target.classList.add('tab--active');
                line.style.left = event.target.offsetLeft + "px";

                $$('.hasClick .tab-movies')[index].classList.add('tab-movies--display');
                $('.hasClick .tab-list-movie').style.left="-"+index*tabUIWidth+"px";
            }
        }
    })
})()