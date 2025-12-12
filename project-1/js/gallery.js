const gallery = document.querySelector("#gallery");
const links = document.querySelectorAll("#gallery a")

for (let i = 0; i < links.length; i++) 
    {
    
    links[i].addEventListener("click", function (event) 
    {
        let source = this.getAttribute("href");
        const placeholder = document.querySelector("#placeholder");
        placeholder.setAttribute("src", source)

        event.preventDefault();
    });

};