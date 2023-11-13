console.log('test');

function loadTabContent(btn,page){
    fetch(page) // 'page' is the URL of your PHP file
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text(); // Assuming the PHP file returns HTML content
        })
        .then(data => {
            // Update the content of a specific element with the fetched data
            const contentContainer = document.querySelector('.tabs-content'); // Replace with the ID of your content container
            contentContainer.innerHTML = data;
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

        setActiveTab();
        
        // btnElement = document.querySelector(btn);

        btn.classList.add('lrmt-btn-active');

}

function setActiveTab(){
    const navElements = document.querySelectorAll('.lrmt-btn');

    navElements.forEach(btns => {
        btns.classList.remove('lrmt-btn-active');
    });
}
