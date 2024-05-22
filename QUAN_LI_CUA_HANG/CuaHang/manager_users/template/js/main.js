// thêm sản phầm vào giỏ hàng 
var cartCount = 0;
var cartItems=[];
function addCart(productId) 
{
    if(cartItems.includes(productId)) // check sản phầm đã có trong giỏ hàng chưa
    {
        showNotification(" sản phầm này đã được thêm vào giỏ hàng rồi ");
    }
    else 
    {
        // chưa có thêm vào , có rồi lập tức trở về if trên
        cartItems.push(productId);
        cartCount++; 
        var cartCountElement = document.getElementById('cartValueLink'); 
        if(cartCountElement) 
        {
            cartCountElement.textContent = 'Giỏ hàng (' + cartCount + ')'; 
            showNotification(" bạn đã thêm vào giỏ hàng ");
        }
    }
}
// hiện thông báo đã thêm vào giỏ hàng 
function showNotification(message) {
    var notificationElement = document.getElementById('notification');
    notificationElement.textContent = message;
    notificationElement.style.display = 'block';
    setTimeout(function() {
        notificationElement.style.display = 'none';
    }, 3000); // Thông báo sẽ ẩn sau 3 giây
}

// phần hiện giỏ hàng 
document.getElementById('cartButton').addEventListener('click', function() {
    document.getElementById('cartOverlay').classList.add('active');
});

document.getElementById('closeIcon').addEventListener('click', function(){
    document.getElementById('cartOverlay').classList.remove('active');
});

// thêm sản phẩm vào giỏ hàng 
let list = document.querySelectorAll('.main_content .main_content--product');
list.forEach(item => {
    item.addEventListener('click', function(event) {
        if (event.target.classList.contains('add')) {
            var itemNew = item.cloneNode(true);
            let checkIsset = false;
            listCart = document.querySelectorAll('.cart .main_content--product');
            listCart.forEach(cart => {
                if (cart.getAttribute('data-key') == itemNew.getAttribute('data-key')) {
                    checkIsset = true;
                    cart.classList.add('danger');
                    setTimeout(() => {
                        cart.classList.remove('danger');
                    }, 1000);
                }
            });
            if (checkIsset == false) {
                document.querySelector('.listCart').appendChild(itemNew);
            }
        }
        console.log(checkIsset);
    });
});






