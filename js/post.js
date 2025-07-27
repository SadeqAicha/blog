const post = document.getElementById('post');

fetch('db/read_more.php')
.then(r=>r.json())
.then(data=>{
    post.innerHTML=`
        <div class="post-image">
        <img src="db/${data.post_image}" alt="image" >
        </div>
        <div class='post-title'><b>${data.post_title}</b></div>
        <div class="post-details">
            <p class="post-info">
                <span><i class="fa-solid fa-user"></i>Aicha</span>
                <span><i class="fa-solid fa-tags"></i>${data.post_category}</span>
                <span><i class="fa-solid fa-calendar-days"></i>${data.post_date}</span>
            </p>
            <p class="read_mode_text">${data.post_content}</p>
        </div>`;
})