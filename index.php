<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Pet</title>
</head>
<body>
    <h1>Prodotti per Animali</h1>
    <div class="product-list">
        <?php
        class Prodotto {
            public $nome;
            public $prezzo;
            public $immagine;
            public $categoria;
            public $tipo;

            public function __construct($nome, $prezzo, $immagine, $categoria, $tipo) {
                $this->nome = $nome;
                $this->prezzo = $prezzo;
                $this->immagine = $immagine;
                $this->categoria = $categoria;
                $this->tipo = $tipo;
            }

            public function mostraProdotto() {
                echo "<div class='product-card'>";
                echo "<img src='{$this->immagine}' alt='{$this->nome}'/>";
                echo "<h2>{$this->nome}</h2>";
                echo "<p>Prezzo: €{$this->prezzo}</p>";
                echo "<p>Categoria: {$this->categoria}</p>";
                echo "<p>Tipo: {$this->tipo}</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>