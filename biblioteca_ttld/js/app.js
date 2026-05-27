let livros = [];

    function cadastrarLivro() {
      const titulo = document.getElementById("titulo").value;
      const autor = document.getElementById("autor").value;

      if (titulo === "" || autor === "") {
        alert("Preencha todos os campos!");
        return;
      }

      livros.push({
        titulo: titulo,
        autor: autor
      });

      document.getElementById("titulo").value = "";
      document.getElementById("autor").value = "";

      mostrarLivros(livros);
    }

    function mostrarLivros(lista) {
      const listaLivros = document.getElementById("listaLivros");

      listaLivros.innerHTML = "";

      if (lista.length === 0) {
        listaLivros.innerHTML = "<p>Nenhum livro encontrado.</p>";
        return;
      }

      lista.forEach(livro => {
        listaLivros.innerHTML += `
          <div class="livro">
            <h3>${livro.titulo}</h3>
            <p>Autor: ${livro.autor}</p>
          </div>
        `;
      });
    }

    function buscarLivro() {
      const busca = document.getElementById("busca").value.toLowerCase();

      const filtrados = livros.filter(livro =>
        livro.titulo.toLowerCase().includes(busca) ||
        livro.autor.toLowerCase().includes(busca)
      );

      mostrarLivros(filtrados);
    }