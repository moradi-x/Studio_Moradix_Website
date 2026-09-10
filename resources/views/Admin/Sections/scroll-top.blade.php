<button
    id="scrollTop"
    class="hidden fixed bottom-6 right-6 bg-gray-900 text-white w-10 h-10 rounded-full shadow-lg">


    ↑


</button>



<script>

const btn = document.getElementById('scrollTop');


window.addEventListener('scroll',()=>{

    if(window.scrollY > 300){

        btn.classList.remove('hidden');

    }else{

        btn.classList.add('hidden');

    }

});


btn.onclick = ()=>{

    window.scrollTo({
        top:0,
        behavior:'smooth'
    });

};

</script>