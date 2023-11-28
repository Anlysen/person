document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();

    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var email = document.getElementById("email").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        document.getElementById("message").innerHTML = xhr.responseText;
        document.getElementById("myForm").reset();
    }
    };
    xhr.send("name=" + encodeURIComponent(name) + "&age=" + encodeURIComponent(age) + "&email=" + encodeURIComponent(email));
});
console.log(xhr);