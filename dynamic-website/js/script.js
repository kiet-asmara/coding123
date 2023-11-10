let filterarray = [];

let galleryarray = [
    {
        id: 1,
        name: "Golang Beginner Course",
        src: "image/golang.png",
        price: "120,000",
        ratings: "1430",
        updated: "9/23"
    },
    {
        id: 2,
        name: "Advanced Javascript",
        src: "image/javascript.jpeg",
        price: "100,000",
        ratings: "913",
        updated: "10/23"
    },
    {
        id: 3,
        name: "C++ Beginner Course",
        src: "image/C++.png",
        price: "150,000",
        ratings: "1046",
        updated: "5/23"
    },
    {
        id: 4,
        name: "Java Algorithms Course",
        src: "image/java.jpg",
        price: "120,000",
        ratings: "1430",
        updated: "9/23"
    },
    {
        id: 5,
        name: "Data Science Beginner Course",
        src: "image/data-science.jpg",
        price: "130,000",
        ratings: "731",
        updated: "11/23"
    },
    {
        id: 6,
        name: "Systems Design Course",
        src: "image/system.jpg",
        price: "150,000",
        ratings: "377",
        updated: "3/23"
    },
    {
        id: 7,
        name: "Advanced Web Development",
        src: "image/webdev.jpg",
        price: "80,000",
        ratings: "920",
        updated: "12/22"
    },
    {
        id: 8,
        name: "Advanced React",
        src: "image/react.jpg",
        price: "110,000",
        ratings: "619",
        updated: "4/23"
    },
    {
        id: 9,
        name: "Cybersecurity Beginner Course",
        src: "image/cybersec.jpg",
        price: "160,000",
        ratings: "361",
        updated: "7/23"
    },
    {
        id: 10,
        name: "Machine Learning Math",
        src: "image/machine.jpg",
        price: "140,000",
        ratings: "177",
        updated: "1/23"
    }
]

// show gallery

showgallery(galleryarray)

function showgallery(arr) {
    document.getElementById("card").innerText = "";

    for (var i = 0; i < arr.length; i++) {
        document.getElementById("card").innerHTML += `
        <div class="courses">
        <img src="${arr[i].src}">
        <div class="details">
            <span>Updated ${arr[i].updated}</span>
            <h6>${arr[i].name}</h6>
            <div class="star">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <span>(${arr[i].ratings})</span>
            </div>
        </div>
        <div class="cost">
            Rp${arr[i].price}
        </div>
    </div>
        `
    }

}

// search function

document.getElementById("myinput").addEventListener("keyup", function () {
    let text = document.getElementById("myinput").value;
    text = text.toLowerCase()

    filterarray = galleryarray.filter(function (a) {
        if (a.name.toLowerCase().includes(text)) {
            return a.name;
        }
    })

    if (this.value == "") {
        showgallery(galleryarray);
    } else {
        if (filterarray == "") {
            document.getElementById("search-error").style.display = 'block';
            document.getElementById("card").innerHTML = "";
        } else {
            showgallery(filterarray);
            document.getElementById("search-error").style.display = 'none';
        }
    }
})