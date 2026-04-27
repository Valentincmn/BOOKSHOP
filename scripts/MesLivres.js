document.addEventListener('DOMContentLoaded', function() {
    const savedBooksKey = 'mesLivres';
    const resultsDiv = document.getElementById('results');
    const emptyText = document.getElementById('emptyText');
    const savedBooks = JSON.parse(localStorage.getItem(savedBooksKey)) || [];

    function updateBooksStorage(books) {
        localStorage.setItem(savedBooksKey, JSON.stringify(books));
    }

    function renderBooks(books) {
        resultsDiv.innerHTML = '';
        emptyText.style.display = books.length === 0 ? 'block' : 'none';

        books.forEach(book => {
            const bookElement = document.createElement('div');
            bookElement.classList.add('book');
            bookElement.innerHTML = `
                <img src="${book.thumbnail}" alt="Couverture du livre">
                <h2>${book.title}</h2>
                <p>Auteur(s): ${book.authors}</p>
                <button class="remove-book">SUPPRIMER</button>
            `;

            bookElement.querySelector('.remove-book').addEventListener('click', function() {
                const updatedBooks = books.filter(savedBook => savedBook.id !== book.id);
                updateBooksStorage(updatedBooks);
                renderBooks(updatedBooks);
            });

            resultsDiv.appendChild(bookElement);
        });
    }

    renderBooks(savedBooks);
});
