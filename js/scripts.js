/*
 * Created by Bierbaumer.
 */

function switchBackground(level) {
    var color = "white";
    switch (level) {
        case "green":
            color = "#8AE234";
            break;
        case "red":
            color = "#E23131";
            break;
        case "blue":
            color = "#3195E2";
            break;
        default:
            alert("something went wrong");
    }
    var select = document.getElementById("colorselection");
    select.style.background = color;

    $("#color_image").attr("src", "images/" + level + ".jpg");
}

