<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Pet</title>
    <link rel="stylesheet" href="./css/style.css">
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
        class Categoria {
            public $nome;
            public $icona;

            public function __construct($nome, $icona = '') {
                $this->nome = $nome;
                $this->icona = $icona;
            }
        }

        class TipoProdotto {
            public $nome;

            public function __construct($nome) {
                $this->nome = $nome;
            }
        }

        $categoriaCani = new Categoria("Cani");
        $categoriaGatti = new Categoria("Gatti");

        $tipoCibo = new TipoProdotto("Cibo");
        $tipoGioco = new TipoProdotto("Gioco");
        $tipoAccessorio = new TipoProdotto("Accessorio");

        $prodotto1 = new Prodotto("Shampoo per cani", 9.99, "./img/img_shampoo.jpg", $categoriaCani->nome, $tipoAccessorio->nome);
        $prodotto2 = new Prodotto("Lettiera per gatti", 14.99, "./img/lettiera_gatti.jpg", $categoriaGatti->nome, $tipoAccessorio->nome);
        $prodotto3 = new Prodotto("Osso per cani", 6.50, "./img/img_osso.jpg", $categoriaCani->nome, $tipoGioco->nome);

        $prodotto1->mostraProdotto();
        $prodotto2->mostraProdotto();
        $prodotto3->mostraProdotto();
        ?>
    </div>
</body>
</html>