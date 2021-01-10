document.body.onload = function() {onLoad()};
async function onLoad() {
    response = await fetch('https://api.github.com/users/3zachm/repos')
    json = await response.json()
    var ul = document.getElementById("repos");

    for (var [key, value] of Object.entries(json)) {
        var li = document.createElement("li");
        var a = document.createElement("a");
        var ul2 = document.createElement("ul");
        var li2 = document.createElement("li");
        ul2.setAttribute("id", "ul-desc");

        a.textContent = json[key]['name'];
        a.setAttribute('href', json[key]['html_url']);
        description = json[key]['description']

        if (description == null) {
            description = '\u00A0';
        }

        li2.appendChild(document.createTextNode(description))
        ul.appendChild(li);
        li.appendChild(a);
        li.appendChild(ul2);
        ul2.appendChild(li2);
    }
}