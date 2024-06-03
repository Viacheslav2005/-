function showDescription(element) {
    var description = element.querySelector('.description');
    if (description.style.display === "none") {
        description.style.display = "block";
    } else {
        description.style.display = "none";
    }
}