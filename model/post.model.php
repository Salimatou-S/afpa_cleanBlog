<?php
//post model
include("config/config.inc.php");
include ("model/pdo.inc.php");

/* try{
    $query="
    SELECT post_date,post_content, post_title,post_img_url, display_name,cat_descr 
    FROM blog_posts 

    INNER JOIN blog_users
    ON post_author = ID

    INNER JOIN blog_categories
    ON post_category = cat_id
    
    WHERE post_ID = " .$_GET['article'];

  /*   die($query);  */
   /*  $req = $pdo->query($query); */
   
   /*  $data =$req->fetch(); */
    //var_dump($data);
/* } catch(Exception $e){
    die("erreur Mysql: " .$e->getMessage());
} */ 

 try{
    $query="
        SELECT post_date,post_content, post_title,post_img_url, display_name,cat_descr 
        FROM blog_posts 

        INNER JOIN blog_users
        ON post_author = ID

        INNER JOIN blog_categories
        ON post_category = cat_id
    
        WHERE post_ID = :article";

    $curseur=$pdo->prepare($query);

    $curseur->bindValue(':article',$_GET["article"], PDO::PARAM_INT);
    $curseur->execute();

    $curseur->setFetchMode(PDO::FETCH_ASSOC);
    $data =$curseur->fetch();

  /*   die($query); 
   /*  $req = $pdo->query($query); */
   
   /*  $data =$req->fetch(); */
   /* var_dump($data); 
    exit; */
 } catch(Exception $e){
    die("erreur Mysql: " .$e->getMessage());
}  

/* if ((!isset($_GET['article'])) || ($_GET['article']=='1')){
$bg='assets/img/malien.jpg';
$color='blue';
$title='Mariage Malinké';
$subtitle='Rites et coutumes';
$content='
Les rituels qui entourent le mariage en pays malinké, principal groupe ethnique du Nord de la Côte d’Ivoire, se distinguent par leur originalité.
Le mariage reste un événement central dans la reproduction des structures familiales en pays malinké. Ayant pour rôle essentiel d\'assurer aux lignages une descendance légitime, et plus généralement de nouer ou reconduire les alliances inter-lignagères, le mariage est assorti d\'un cérémonial spectaculaire, surtout en sa phase de «<span class="test">l\'attachement de la cola </span>», qui doit réunir la majeure partie de famille étendue pour consacrer l\'union. 
Les Dioula de la Côte d\'Ivoire organisent à l\'aide des noix de cola des rituels destinés à consolider les relations de couple. Le jour du mariage, on enroule dans un pagne blanc deux tranches de cola (une rouge et une blanche) représentant les deux fiancés. On pose les mains dessus et on fait des incantations ; le mariage est ainsi rendu indissoluble, il ne pourra être rompu qu\'avec l\'accord des deux parties en présence. Les préceptes de l\'Islam interdisent les excitants tels que l\'alcool et le tabac, mais ils ne censurent pas la noix de cola. La diffusion de cette noix était autrefois fondée sur l\'idée qu\'elle était la « noix du prophète Mahomet » et que sa consommation favorisait l\'entrée au paradis. La population islamisée est ainsi devenue très friande de cette noix qu\'on offre d\'ailleurs aux Imams pendant la cérémonie du mariage dans la mosquée. 
<style>
    .test{
        color:'. $color .';
    }
</style>
Nul n’est besoin de rappeler que le mariage reste un contrat liant deux familles et non deux individus et est soumis à des interdictions entre certains clans et classes, et à des règles prescriptives. Car, rassembler la dot est une épreuve longue et difficile, tant pour le jeune qui dépend de sa famille que pour le budget de la famille. Le mariage se déroule de manière chronologique. D’abord le lundi ou le mercredi. Le « <b>Lassiguili</b> » (mise en chambre de la mariée) et le « Djabila » (pose du henné) consacre le premier jour du mariage où la future mariée doit rester dans sa chambre tout au long de la cérémonie sauf à des moments exceptionnelles très précises où sa présence est nécessaire. Puis vient le jeudi où l’on procède au « Fouroussiri » ou « Attachement de cola ». Il s\'agit du mariage religieux, il se déroule à la mosquée et fait intervenir les Imams en vue de l\'union des futurs mariés. Il se fait en général le matin. Puis s’ensuit le « Koun Koli » (lavage de la tête de la mariée) qui se fait généralement dans l\'après-midi. Après cette cérémonie, la mariée est conduite chez son mari. Et on en arrive enfin au dimanche, le jour où les Dioula font, au lever du jour, le « Koun Dan » (tresses que l\'on fait à la mariée) suivi de la sortie de la mariée en public, des remises des dons et cadeaux des marraines et des invités. Le « Deban Don » qui est la danse des marraines aux rythmes du Djembé, est l’étape qui met fin à la cérémonie.';
//on ne met pas de balise de fin php car toutes les lignes vides en dessous sont du html si on ferme. Ceci permet de faire un fichier 100% php. On doit eviter de mettre des espaces'
}
else if ($_GET['article']=='2'){
$bg='assets/img/post2.jpg';
$color='blue';
$title='Mariage Akan';
$subtitle='Rites et coutumes';
$content='Chez les Akan en général et les Baoulé en particulier, le mariage traditionnel se fait en deux étapes. Une première qu’on appelle le Kôkô qui est suivi du mariage traditionnel. Certaines circonstances autorisent la célébration du mariage en une seule fois au cours d’une cérémonie qui associera ces deux événements.
<br><br>
1. Kôkô <br>
Le Kôkô correspond à la cérémonie de présentation du prétendant aux futurs beaux-parents. Le Kôkô n’est rien d’autre que l’onomatopée sensée représentée les coups que l’on donne à une porte lorsqu’on souhaite rentrer dans une maison. On demande ainsi la permission à la famille de la jeune fille l’autorisation que le prétendu puisse venir lui rendre visite.

A cette occasion, une bouteille de liqueur est offerte, il s’agit généralement d’une bouteille de Gin. Cette cérémonie autorise la fréquentation officielle de la jeune fille.
<br><br>
2. Le mariage coutumier <br>
La cérémonie a lieu le matin dès le levé du jour. Une délégation du prétendant se rend chez les parents de la promise.
Le père du futur marié ou son représentant fait la demande en mariage. Un frère du père de la mariée donne en mariage la fille.
Des talents d’orateurs sont demandés au porte-parole de la famille du jeune homme. Au cours de cette cérémonie pendant laquelle les familles se font face, un émissaire est également désigné ou choisi dans la famille de la jeune fille. Cet émissaire servira alors d’avocat et défendra les droits du jeune homme.
Après les salutations d’usage, le porte-parole

introduit la raison qui motive la venue de la famille.
Un jeu s’installe dans le but de tester la patience du jeune homme et de sa famille afin d’évaluer sa détermination et sa volonté d’épouser la promise.

Il arrive qu’on fasse défiler les sœurs de la fiancée afin que le jeune prouve qu’il connait bien sa fiancée.
Elle apparait ensuite couverte d’un pagne. Elle se découvre ensuite et son fiancé doit attester que c’est sa promise.
Plusieurs dons en numéraire et en nature sont effectués au cours de cette cérémonie:<br>

* Liqueurs
6 bouteilles de liqueur (2 gins, 1 Rhum, 1 Martini, 1 Whisky et 1 Campari) sont offertes. Le nom de boissons mentionnées est indicatif et peu varié. Voici la répartition des boissons :
- 1 bouteille de liqueur est retournée aux beaux-parents en guise de remerciement
- 1 ou 2 bouteilles de liqueur à l’assemblée en guise de remerciement. Ces bouteilles seront consommées sur place au cours de la cérémonie.
- 1 bouteille de Rhum à la famille pour la maman de la mariée
- Le reste des bouteilles de liqueur est tenu à la disposition du père de la mariée ou de son représentant légal.<br>

* Dot en argent
Elle est de 6 060 FCFA repartis de la façon suivante : 6 000 francs pour le père et la famille et 60 francs à rembourser en cas de divorce.
<br>
* Un sac de sel : pour les tantes de la mariée
<br>
* Un paquet d’allumette à distribuer à l’assemblée présente
On peut prévoir 5 000 F de part et d’autre en remplacement du paquet d’allumettes
<br>
* L’argent du couteau des frères de la mariée
Une libation est ensuite faite par le père de la mariée ou son représentant. Cette libation est sensée unir les époux, remercier te recommander leur union aux ancêtres. La cérémonie de libation est plus qu’un acte banal ou uniquement culture. Il exige certains protocoles qui sont plus ou moins suivis.
La libation se fait généralement sur la terre, elle boisson est versée dans la terre et des paroles sont prononcées au fur et à mesure. Il est parfois imposé à celui qui fait la libation de se déchausser et de descendre légèrement la pagne Kita qu’il a porté sur son épaule.
Cette libation se fait en présence des époux qui se font face. Après la libation, il est demandé aux époux de s’accroupir et de déposer les mains dans la boisson qui a été versée et de porter leurs mains sur leur front.
<br>
* L’argent de l’accolade entre les époux.
Après la cérémonie de libation qui scelle le mariage, les époux se font des accolades. L’époux remet alors de l’argent à son époux. Cette somme est laissée à la discrétion de la mariée.
Cette somme est remise à la mariée pour ses sœurs qu’elle quitte.
<br>
* Une somme d’argent
Cette somme est sensée compenser l’argent que les parents ont investi pour les soins et l’éducation de la mariée. La remise de cette somme d’argent ne signifie pas l’achat de la mariée mais montre la valeur de la femme.';
}
else if ($_GET['article']=='3')
{
$bg='assets/img/post2.jpg';
$color='blue';
$title='Mariage Abidji';
$subtitle='Rites et coutumes';
$content='Chez les Akan en général et les Baoulé en particulier, le mariage traditionnel se fait en deux étapes. Une première qu’on appelle le Kôkô qui est suivi du mariage traditionnel. Certaines circonstances autorisent la célébration du mariage en une seule fois au cours d’une cérémonie qui associera ces deux événements.
<br><br>
1. Kôkô <br>
Le Kôkô correspond à la cérémonie de présentation du prétendant aux futurs beaux-parents. Le Kôkô n’est rien d’autre que l’onomatopée sensée représentée les coups que l’on donne à une porte lorsqu’on souhaite rentrer dans une maison. On demande ainsi la permission à la famille de la jeune fille l’autorisation que le prétendu puisse venir lui rendre visite.

A cette occasion, une bouteille de liqueur est offerte, il s’agit généralement d’une bouteille de Gin. Cette cérémonie autorise la fréquentation officielle de la jeune fille.
<br><br>
2. Le mariage coutumier <br>
La cérémonie a lieu le matin dès le levé du jour. Une délégation du prétendant se rend chez les parents de la promise.
Le père du futur marié ou son représentant fait la demande en mariage. Un frère du père de la mariée donne en mariage la fille.
Des talents d’orateurs sont demandés au porte-parole de la famille du jeune homme. Au cours de cette cérémonie pendant laquelle les familles se font face, un émissaire est également désigné ou choisi dans la famille de la jeune fille. Cet émissaire servira alors d’avocat et défendra les droits du jeune homme.
Après les salutations d’usage, le porte-parole

introduit la raison qui motive la venue de la famille.
Un jeu s’installe dans le but de tester la patience du jeune homme et de sa famille afin d’évaluer sa détermination et sa volonté d’épouser la promise.

Il arrive qu’on fasse défiler les sœurs de la fiancée afin que le jeune prouve qu’il connait bien sa fiancée.
Elle apparait ensuite couverte d’un pagne. Elle se découvre ensuite et son fiancé doit attester que c’est sa promise.
Plusieurs dons en numéraire et en nature sont effectués au cours de cette cérémonie:<br>

* Liqueurs
6 bouteilles de liqueur (2 gins, 1 Rhum, 1 Martini, 1 Whisky et 1 Campari) sont offertes. Le nom de boissons mentionnées est indicatif et peu varié. Voici la répartition des boissons :
- 1 bouteille de liqueur est retournée aux beaux-parents en guise de remerciement
- 1 ou 2 bouteilles de liqueur à l’assemblée en guise de remerciement. Ces bouteilles seront consommées sur place au cours de la cérémonie.
- 1 bouteille de Rhum à la famille pour la maman de la mariée
- Le reste des bouteilles de liqueur est tenu à la disposition du père de la mariée ou de son représentant légal.<br>

* Dot en argent
Elle est de 6 060 FCFA repartis de la façon suivante : 6 000 francs pour le père et la famille et 60 francs à rembourser en cas de divorce.
<br>
* Un sac de sel : pour les tantes de la mariée
<br>
* Un paquet d’allumette à distribuer à l’assemblée présente
On peut prévoir 5 000 F de part et d’autre en remplacement du paquet d’allumettes
<br>
* L’argent du couteau des frères de la mariée
Une libation est ensuite faite par le père de la mariée ou son représentant. Cette libation est sensée unir les époux, remercier te recommander leur union aux ancêtres. La cérémonie de libation est plus qu’un acte banal ou uniquement culture. Il exige certains protocoles qui sont plus ou moins suivis.
La libation se fait généralement sur la terre, elle boisson est versée dans la terre et des paroles sont prononcées au fur et à mesure. Il est parfois imposé à celui qui fait la libation de se déchausser et de descendre légèrement la pagne Kita qu’il a porté sur son épaule.
Cette libation se fait en présence des époux qui se font face. Après la libation, il est demandé aux époux de s’accroupir et de déposer les mains dans la boisson qui a été versée et de porter leurs mains sur leur front.
<br>
* L’argent de l’accolade entre les époux.
Après la cérémonie de libation qui scelle le mariage, les époux se font des accolades. L’époux remet alors de l’argent à son époux. Cette somme est laissée à la discrétion de la mariée.
Cette somme est remise à la mariée pour ses sœurs qu’elle quitte.
<br>
* Une somme d’argent
Cette somme est sensée compenser l’argent que les parents ont investi pour les soins et l’éducation de la mariée. La remise de cette somme d’argent ne signifie pas l’achat de la mariée mais montre la valeur de la femme.';
}

else 
{
$bg='https://www.codeur.com/blog/wp-content/uploads/2019/05/corriger-erreur-404-760x570.jpg';
$title='Erreur 404';
$subtitle='page inexistante!';
$content='';
} */