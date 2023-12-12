

const storedProducts = localStorage.getItem('products');

// Verifica si hay datos almacenados
if (storedProducts) {
    console.log('Carrito lleno y listo con éxito :)');
    //alert("carrito");
    // Convierte la cadena a un arreglo
    const allProducts = JSON.parse(storedProducts);

    // Obtiene el elemento del DOM donde mostrar los productos (main)
    const mainContainer = document.getElementById('mainContainer');

    // Limpia el contenido anterior del elemento (si lo hay)
    mainContainer.innerHTML = '';

    // Muestra los productos en el DOM dentro del main
    allProducts.forEach(product => {
        const productElement = document.createElement('div');
        productElement.innerHTML = `
            <h2>${product.title}</h2>
            <p>Quantity: ${product.quantity}</p>
            <p>Price: ${product.price}</p>
        `;
        mainContainer.appendChild(productElement);
    });
} else {
    console.log('No hay productos almacenados en el localStorage.');
}


