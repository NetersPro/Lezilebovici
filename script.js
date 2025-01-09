			const image1 = document.getElementById('image1');
            const popup1  = document.getElementById('popup1'); 
            const image2 = document.getElementById('image2');
            const popup2  = document.getElementById('popup2');
            const image3 = document.getElementById('image3'); 
            const popup3  = document.getElementById('popup3');
            const image4 = document.getElementById('image4'); 
            const popup4  = document.getElementById('popup4');
            const overlay1 = document.getElementById('overlay1');
            const overlay2 = document.getElementById('overlay2');
            const overlay3 = document.getElementById('overlay3');
            const overlay4 = document.getElementById('overlay4');
            const closeBtn1 = document.getElementById('close-btn1');
            const closeBtn2 = document.getElementById('close-btn2');
            const closeBtn3 = document.getElementById('close-btn3');
            const closeBtn4 = document.getElementById('close-btn4');
            
            image1.addEventListener('click', () => {
                popup1.style.display = 'block';
                overlay1.style.display = 'block';
            });
            image2.addEventListener('click', () => {
                popup2.style.display = 'block';
                overlay2.style.display = 'block';
            });
            image3.addEventListener('click', () => {
                popup3.style.display = 'block';
                overlay3.style.display = 'block';
            })
            image4.addEventListener('click', () => {
                popup4.style.display = 'block';
                overlay4.style.display = 'block';
            })
            const closePopup1 = () => {
                popup1.style.display = 'none';
                overlay1.style.display = 'none';
            };                   
            closeBtn1.addEventListener('click', closePopup1);
            overlay1.addEventListener('click', closePopup1);
            
            const closePopup2 = () => {
                popup2.style.display = 'none';
                overlay2.style.display = 'none';
            };                   
            closeBtn2.addEventListener('click', closePopup2);
            overlay2.addEventListener('click', closePopup2);

            const closePopup3 = () => {
                popup3.style.display = 'none';
                overlay3.style.display = 'none';
            }
            closeBtn3.addEventListener('click', closePopup3);
            overlay3.addEventListener('click', closePopup3);
            const closePopup4 = () => {
                popup4.style.display = 'none';
                overlay4.style.display = 'none';
            };                   
            closeBtn4.addEventListener('click', closePopup4);
            overlay4.addEventListener('click', closePopup4);
