let dropdown = document.querySelectorAll("nav ul li a");

        dropdown.forEach((element) => {
            element.addEventListener("click" , (event)=> {
                event.stopPropagation();
                element.nextElementSibling.classList.toggle("show");
            })
        })