import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}
