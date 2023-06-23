
let mainPost = document.querySelectorAll('.mainpost');
let posts = document.querySelectorAll(".post");
let i = 0;
let postIndex = 0;
let currentPost = posts[postIndex];
let currentMainPost = mainPost[postIndex];
let progressInter = setInterval(progress, 100);
function progress(){
    if( i === 100){
        i  = -5;
        currentPost.querySelector('.progfill').style.width = 0
        document.querySelector(".progbar, .progfill").style.width = 0
        currentPost.classList.remove("post--active")
        postIndex++;
        currentMainPost.classList.add("mainpost--not-active")
        currentMainPost.classList.remove("mainpost--active")
        if(postIndex === posts.length){
            postIndex = 0;
        }
        currentPost = posts[postIndex];
        currentMainPost = mainPost[postIndex]
    }else{
        i++
        currentPost.querySelector(".progfill").style.width = `${i}%`
        document.querySelector(".progbar .progfill").style.width = `${1}%`
        currentPost.classList.add('post--active')
        currentMainPost.classList.add('mainpost--active')
        currentMainPost.classList.remove('mainpost--not-active')
    }
}

