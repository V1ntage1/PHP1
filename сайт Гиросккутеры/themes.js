
const btn = document.getElementById ("theme-button");
const link = document.getElementById ("theme-link");

btn.addEventListener("click", ChangeTheme);

function ChangeTheme() {
    let mainTheme = "master.css";
    let darkTheme = "dark.css";
    let currTheme = link.getAttribute("href");
    let theme;

    if (currTheme === mainTheme) {
        currTheme = darkTheme;
        theme = "dark";
    } else {
        currTheme = mainTheme;
        theme = "master";
    }

    link.setAttribute("href", currTheme);

    Save(theme);
	
	
}
