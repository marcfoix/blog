# blog
# route
Test validation
    La route est correctement définie, en annotations, et est reliée à la méthode show() de BlogController.
    La route blog/mon-super-article affiche bien une vue avec en titre "Mon Super Article" dans un <h1>.
    La route blog/article-du-1-janvier-1970 affiche bien une vue avec en titre "Article Du 1 Janvier 1970" dans un <h1>.
    La route blog/ affiche bien une vue avec "Article Sans Titre" dans un <h1>.
    La route blog/MonArticle n'affiche rien (erreur 404) car le paramètre contient des majuscules.
    La route blog/mon_article n'affiche rien (erreur 404) car le paramètre contient un underscore.

