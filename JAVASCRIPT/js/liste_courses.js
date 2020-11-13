const jsonText = '{"categories":[{"id":-1,"name":"Hors catégorie"},{"id":0,"name":"Fruits et Légumes","articles":["Pommes","Poires","Bananes","Citrons","Salade","Tomates","Carottes","Courgettes","Pommes de terre","Oignons","Poireaux"]},{"id":1,"name":"Conserves","articles":["Mais","Petits pois","Haricots verts","Sauce tomate","Thon","Pâté","Olives","Cornichons","Plats cuisines"]},{"id":2,"name":"Petit-déj / Goûter","articles":["Café","Cacao","Thé","Céréales","Confiture","Miel","Pâte à tartiner","Brioche","Biscottes","Pain de mie","Gâteaux","Chocolat","Bonbons"]},{"id":3,"name":"Bébé","articles":["Lait","Biscuits","Petits pots","Compotes","Couches","Eau minérale"]},{"id":4,"name":"Crêmerie","articles":["Œufs","Beurre","Crème fraîche","Fromage","Yaourts","Pâte à tarte"]},{"id":5,"name":"Viande","articles":["Bœuf","Veau","Porc","Volailles","Lardons","Jambon","Charcuterie"]},{"id":6,"name":"Poisson","articles":["Saumon","Bâtons de crabe","Crevettes","Sardines","Maquereaux"]},{"id":7,"name":"Epicerie","articles":["Pâtes","Riz","Purée","Lentilles","Soupes","Epices","Poivre /sel","Moutarde","Mayonnaise","Ketchup","Huile","Vinaigre","Farine","Sucre","Sucre vanillé","Levure","Biscuits apéro","Pain"]},{"id":8,"name":"Surgelés","articles":["Légumes","Frites","Glaces","Pizzas","Viande","Poisson"]},{"id":9,"name":"Boissons","articles":["Eau","Lait","Sodas","Jus de fruit","Sirop","Bière","Vin","Apéritifs"]},{"id":10,"name":"Hygiène","articles":["Gel douche","Shampoing","Brosse à dents","Dentifrice","Coton","Coton-tige","Déo","Gel coiffant","Rasoirs","Mousse à raser","Démaquillant","Dissolvant","Protection périodique","Mouchoirs"]},{"id":11,"name":"Entretien","articles":["Eponges","Sacs poubelle","Papier alu","Cellophane","Essuie-tout","Javel","Gel WC","Produit sol","Produit SDB","Produit vitres","Liquide vaisselle","Lessive","Adoucissant","Papier toilette"]},{"id":12,"name":"Maison","articles":["Serviettes en papier","Piles","Ampoules","Bougies","Enveloppes"]},{"id":13,"name":"Animaux","articles":["Croquettes","Litière","Boîtes"]}]}';

function initShoppingList(container) {

    /**
     * Get the fontawesome class logo for a given category id
     *
     * @param categoryId a category id
     * @returns the corresponding class logo
     */
    function getCategoryLogoName(categoryId) {

        switch (categoryId) {
            case 0 :
                return 'fas fa-apple-alt';
            case 1 :
                return 'fas fa-archive';
            case 2 :
                return 'fas fa-coffee';
            case 3 :
                return 'fas fa-baby';
            case 4 :
                return 'fas fa-ice-cream';
            case 5 :
                return 'fas fa-drumstick-bite';
            case 6 :
                return 'fas fa-fish';
            case 7 :
                return 'fas fa-store-alt';
            case 8 :
                return 'fas fa-icecles';
            case 9 :
                return 'fas fa-cocktail';
            case 10 :
                return 'fas fa-shower';
            case 11 :
                return 'fas fa-broom';
            case 12 :
                return 'fas fa-home';
            case 13 :
                return 'fas fa-cat';
            default :
                return 'fas fa-question-circle';
        }
    }

}
