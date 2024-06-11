const element = document.querySelector('.element-to-animate');

let position = 0;

function animate() {

    position += 1;

    element.style.left = position + 'px';

    if (position < 100) {
        requestAnimationFrame(animate);
    }
}

animate();
