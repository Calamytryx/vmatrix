console.log('test');

function expand(){
    console.log('test');
    var popup = document.querySelector(".profile-expandable");
    popup.classList.toggle("show");
}

function loadPage(btn,page){
    hidePost();
    fetch(page) // 'page' is the URL of your PHP file
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text(); // Assuming the PHP file returns HTML content
        })
        .then(data => {
            // Update the content of a specific element with the fetched data
            const contentContainer = document.querySelector('.mc-wrapper'); // Replace with the ID of your content container
            contentContainer.innerHTML = data;
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

        setActiveNav();
        
        btnElement = document.querySelector(btn);

        btnElement.classList.add('nav-active');

}

function reloadPage(btn,page){
    
    reload().then(()=>{loadPage(btn,page);});

    
}

function reload(){
    return new Promise((resolve) => {
        window.location.reload();
        resolve();
    });
}

function setActiveNav(){
    const navElements = document.querySelectorAll('.sn-nav button');

    navElements.forEach(btns => {
        btns.classList.remove('nav-active');
    });
}
