# Antilope version 2

Dans le cadre de mes études de bachelier en infographie, pour le jury de 2ème année, j'ai réaliser 3 projets: CV, Portfolio et site client.

Je les aient présenté en juin 2022 une première fois et après améliorations suite aux feedback, les présente à nouveau en spetembre 2022.

## Version 1

Vous trouverez [ici](https://github.com/AlineDB/projet_Antilope) le GITHUB la première version avec la documentation s'y référant: moodboard, code, recherches, wireframe ...

Le site est consultable [à cette adresse](https://antilope.aline-db.be/fr/)

Les retours étaient principalement sur le design non abouti, l'ambiance trop alarmante, le défilement horizontal pas top pour les modules,
grille et espacement à revoir et les typo qui ne s'accordait pas.

Le client a effectué un retour également: les logos en footer doivent être retravaillés, défilement pas intuitif (horizontal), images des dispositifs
intérieurs non affichés, Formulaire doit être envoyés à plusieurs personnes (2 mini), mieux présenter les partenaires, améliorer la trad en anglais (tout n'était pas fait),
mieux exploité l'espace et les images.

## Version 2

Vous trouverez le moodboard de la nouvelle version sous le nom [moodboard antilope 2session](https://github.com/AlineDB/antilope-V2/tree/main/Doc)

Vous trouverez le wireframe sous le nom [antilope V2](https://github.com/AlineDB/antilope-V2/tree/main/Doc)

Vous trouverez le design [design antilope 2e session](https://github.com/AlineDB/antilope-V2/tree/main/Doc)

Voici le [le lien du nouveau site](https://breathe-antilope.aline-db.be)

## Tests

### W3C HTML 
Deux balises non fermées et une déclaration de form en trop. Deux erreurs qui concernent deux img externes sans alt que je ne peux rectifier. 
Plus deux erreurs qui concernent deux déclarations de height auto au redimensionnement de deux images.

Le heading-level outline est correct.

### W3C CSS

Aucune erreur trouvée, certification CSS niveau 3 + SVG. Il y a des avertissement mais cela concerne les déclarations webkit et moz.

### W3C Link

Pas d'erreur. Un avertissement est donné pour l'adresse du site de l'ISSEP (status 500).

### W3C Internationalisation

Languages FR par défaut et détecte bien les fichier fr-BE et en_BE. Le méta charset UTF-8.

### CSS Stats

Au nivea udes couleurs et typographies cela semble correct. Par contre pour le niveau de spécificité il y a 8 high level tout en restant raisonnable car le plus haut
score est de 21 pour 3 d'entre eux.

### Wave contrast and structure

La même erreur concernant les deux alt manquant pour les photo externe est affichée. Un avertissement de contraste pour un lien et des avertissement de redondance pour d'autres.


### GTMetrix performance

Test effectué via un serveur du Canada, navigateur Chrome.
Grade B, Performance 78% et 91% pour la structure. J'installe Imagify pour optimiser les images qui prennent pas mal de place et effectue le test à nouveau.
Résultat: Grade B, performance à 79% et structure à 92%.

### I am responsive

Le titre des articles sur la page d'accueil ne se mettent pas correctement et l'alignement côte à côte sur un "petit" laptop est un peu décalé sur la droite.
L'ancre pour revenir en haut de la page en mode mobile est au dessus du footer, pile sur le lien de la page contact. Il faudrait la remonter un peu en version mobile.