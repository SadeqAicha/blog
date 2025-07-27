const table_content = document.getElementById('table_content');
const update_container = document.getElementById('update_container');
const dark_membrane = document.getElementById('dark_membrane');
const exit_btn = document.getElementById('exit_btn');


function display_data(){
    table_content.innerHTML='';
    fetch("db/all-posts-data.php")
    .then(r=>r.json())
    .then((data)=>{
        for(let i=0;i<data.length;i++){
            table_content.innerHTML+=`
            <tr>
                <td>${data[i].post_id}</td>
                <td><img src="db/${data[i].post_image}" class="post_image" alt="image"></td>
                <td>${data[i].post_title}</td>
                <td>${data[i].post_category}</td>
                <td>${data[i].post_date}</td>
                <td><button class="btn btn-primary" onclick="update_post('${data[i]}')">Update</button></td>
                <td><button class="btn btn-danger" onclick="delete_post('${data[i].post_id}')">Delete</button></td>
            </tr>`;
        }
    });
}
display_data();
function delete_post(id){
    fetch("db/delete-post.php",{
        headers:{
            'Content-Type': 'application/json'
        },
        method: 'post',
        body: JSON.stringify({'id': id})
    })
    .then(r=>r.json())
    .then(data=>{
        if(data.success==true)
            display_data();
    })
}

// Update post function
function update_post(data){
    dark_membrane.style.display='block';
    update_container.style.display='flex';
    
    update_container.innerHTML=`
            <button class="btn-custom btn-danger" id="exit_btn">Exit</button>
            <div class="col-md-10" class="main-area">
                <p id="error-sentence"></p>
                <button class="btn-custom">Update Post</button>
                <div class="new-post">
                    <div class="form-group">
                        <label for="title">Post title</label>
                        <input type="text" id="title" name="post-title" class="form-control bg-dark text-light value="${data.post_title}">  
                    </div>
                    <div class="form-group">
                        <label for="category">Post category</label>
                        <select name="post-category" id="category" class="form-control bg-dark text-light" value="${data.post_category}">
                        </select>  
                    </div>
                    <div class="form-group">
                        <label for="post-img">Post image</label>
                        <input type="file" name="post-img" id="post-img" class="form-control bg-dark text-light" value="${data.post_image}">  
                    </div>
                    <div class="form-group">
                        <label for="post-text">Post content</label>
                        <textarea name="post-text" id="post-text" class="form-control bg-dark text-light" value="${data.post_content}"></textarea> 
                    </div>
                    <button id='submit_btn' name='submit_btn' class="btn-custom form-control">Update</button>
                </div>
            </div>`
exit_btn.addEventListener('click',function(){
    dark_membrane.style.display='none';
    update_container.style.display='none';
})            
}
