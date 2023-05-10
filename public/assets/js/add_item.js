function readURL(input) {
    imageBox = document.getElementById("result");
    imageBox.innerHTML = "";
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            //e.target.result
            var productImage = new Image();
            productImage.src = e.target.result;
            imageBox.appendChild(productImage);
        };

        reader.readAsDataURL(input.files[0]);
        document.getElementById("box").classList.add("hidden");
        return true;
    } else {
        document.getElementById("box").classList.remove("hidden");
    }
}
