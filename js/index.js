const posts_container = document.getElementById('posts_container');
const last_posts = document.getElementById('last-posts');
const categories = document.getElementById('categories');

last_posts.innerHTML='';
posts_container.innerHTML='';
categories.innerHTML='';

// Posts Area
fetch("db/all-posts-data.php")
.then(r=>r.json())
.then((data)=>{
    for(let i=0;i<data.length;i++){
        posts_container.innerHTML+=`
        <div class="post">
            <div class="post-image">
            <img src="db/${data[i].post_image}" alt="image" >
            </div>
            <div class="post-title"><b>${data[i].post_title}</b></div>
            <div class="post-details">
                <p class="post-info">
                    <span><i class="fa-solid fa-user"></i>Aicha</span>
                    <span><i class="fa-solid fa-tags"></i>${data[i].post_category}</span>
                    <span><i class="fa-solid fa-calendar-days"></i>${data[i].post_date}</span>
                </p>
                <p class="read_mode_text">${data[i].post_content}</p>
                <button onclick="read_more('${data[i].post_id}')" name="read_more_btn" class="btn btn-custom">Read more</button>
            </div>
        </div>`;
    }
    // Last posts Area
    for(let i=data.length-1;i>=0;i--){
        last_posts.innerHTML+=`
        <li>
            <a href="">
                <span><img src=db/${data[i].post_image} alt="image"></span>
                <span>${data[i].post_title}</span>
            </a>
        </li>`;
    }
});

// Categories Area

fetch("db/all-categories-data.php")
.then(r=>r.json())
.then((data)=>{
    for(let i=0;i<data.length;i++){
        categories.innerHTML+=`
        <li>
            <a onclick="display_selon_cat('${data[i].category_name}')">
                <span><i class="fa-solid fa-tags"></i></span>
                <span>${data[i].category_name}</span>
            </a>
        </li>`;
    }
})


function display_selon_cat(cat_name){
    posts_container.innerHTML='';
    fetch("db/all-posts-data.php")
    .then(r=>r.json())
    .then((data)=>{
        for(let i=0;i<data.length;i++){
            if(data[i].post_category == cat_name){
            posts_container.innerHTML+=`
            <div class="post">
                <div class="post-image">
                <img src="db/${data[i].post_image}" alt="image" >
                </div>
                <div class="post-title"><b>${data[i].post_title}</b></div>
                <div class="post-details">
                    <p class="post-info">
                        <span><i class="fa-solid fa-user"></i>Aicha</span>
                        <span><i class="fa-solid fa-tags"></i>${data[i].post_category}</span>
                        <span><i class="fa-solid fa-calendar-days"></i>${data[i].post_date}</span>
                    </p>
                    <p class="read_mode_text">${data[i].post_content}</p>
                    <button class="btn btn-custom">Read more</button>
                </div>
            </div>`;
            }
        }
    })
}

function read_more(id){
    fetch("db/read_more.php", {
        headers: {
            'Content-Type': 'application/json'
        },
        method: 'POST',
        body: JSON.stringify({'id':id})
    })
    location.href = 'db/read_more.php';
}