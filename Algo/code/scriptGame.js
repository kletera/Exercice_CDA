const aptitudes = [
  { nom: "Tir", description: "Précision et efficacité avec les armes à distance", passion_possible: true },
  { nom: "Corps à corps", description: "Efficacité au combat rapproché (mêlée)", passion_possible: true },
  { nom: "Construction", description: "Vitesse et qualité de construction des structures", passion_possible: true },
  { nom: "Exploitation minière", description: "Vitesse d'extraction des ressources minières", passion_possible: true },
  { nom: "Cuisine", description: "Qualité des repas préparés, réduit les risques d'intoxication", passion_possible: true },
  { nom: "Plantes", description: "Vitesse de récolte et de semis, rendement agricole", passion_possible: true },
  { nom: "Animaux", description: "Apprivoisement, dressage et gestion des animaux", passion_possible: true },
  { nom: "Fabrication (Artisanat)", description: "Qualité et vitesse de fabrication d'objets à l'établi", passion_possible: true },
  { nom: "Art", description: "Qualité des œuvres d'art créées (sculptures, etc.)", passion_possible: true },
  { nom: "Médecine", description: "Efficacité des soins médicaux et chirurgies", passion_possible: true },
  { nom: "Social", description: "Capacité à négocier, recruter des prisonniers, commercer", passion_possible: true },
  { nom: "Intellect", description: "Vitesse de recherche scientifique", passion_possible: true },
];

const traits = [
  { nom: "Brillant", description: "+50% de vitesse d'apprentissage sur toutes les aptitudes", categorie: "positif" },
  { nom: "Travailleur acharné", description: "Travaille plus vite et plus efficacement", categorie: "positif" },
  { nom: "Optimiste", description: "Bonus d'humeur constant", categorie: "positif" },
  { nom: "Beau", description: "Bonus social important, meilleure opinion des autres", categorie: "positif" },
  { nom: "Tirailleur", description: "Bonus de précision au tir", categorie: "positif" },
  { nom: "Sanguinaire", description: "Aime tuer, gagne de l'humeur lors des combats", categorie: "neutre" },
  { nom: "Pyromane", description: "Envie irrésistible de mettre le feu", categorie: "négatif" },
  { nom: "Idiot du village", description: "Ne peut jamais apprendre certaines aptitudes (Intellect, Médecine, Social...)", categorie: "négatif" },
  { nom: "Incapable de violence", description: "Ne peut ni tirer ni combattre au corps à corps", categorie: "négatif" },
  { nom: "Paresseux", description: "Travaille plus lentement", categorie: "négatif" },
  { nom: "Neurotique", description: "Sautes d'humeur fréquentes et importantes", categorie: "négatif" },
  { nom: "Masochiste", description: "Gagne de l'humeur en étant blessé", categorie: "neutre" },
  { nom: "Cannibale", description: "Aime manger de la chair humaine", categorie: "neutre" },
  { nom: "Ascétique", description: "N'a pas besoin de belles pièces pour être heureux", categorie: "neutre" },
  { nom: "Gourmet", description: "Malus d'humeur si la nourriture n'est pas de qualité", categorie: "négatif" },
  { nom: "Volage", description: "A du mal à rester fidèle dans une relation", categorie: "neutre" },
  { nom: "Chaste", description: "N'a pas d'intérêt pour les relations romantiques", categorie: "neutre" },
  { nom: "Grand fumeur", description: "Besoin fréquent de fumer, sinon malus d'humeur", categorie: "négatif" },
  { nom: "Immunité naturelle", description: "Meilleure résistance aux maladies", categorie: "positif" },
  { nom: "Fragile", description: "Plus susceptible d'être blessé gravement", categorie: "négatif" },
];

const travail=[
    {},
    {},
    {}
]

// Génère un objet aptitudes complet (niveau + passion) pour un colon
function creerAptitudes(niveaux = {}, passions = []) {
  const result = {};
  aptitudes.forEach(apt => {
    result[apt.nom] = {
      niveau: niveaux[apt.nom] ?? Math.floor(Math.random() * 7),
      passion: passions.includes(apt.nom) ? "brulante" : "aucune", // "aucune" | "interesse" | "brulante"
    };
  });
  return result;
}

// Récupère les objets trait complets à partir de leurs noms
function creerTraits(noms = []) {
  return noms.map(nom => traits.find(t => t.nom === nom)).filter(Boolean);
}

// ressources
let ressources = {
  nourriture: 100,
  bois: 32,
  pierre: 50,
  or: 0,
};

let population = [
  {
    id: 1,
    prenom: "Jean",
    sexe: "homme",
    age: 27,
    sante: {
      pv: 100,
      pv_max: 100,
      malades: [],       // ex: ["grippe", "infection"]
      blessures: [],     // ex: [{ partie: "bras gauche", gravite: "légère" }]
    },
    aptitudes: creerAptitudes(
      { "Construction": 5, "Exploitation minière": 2, "Tir": 3 },
      ["Construction"] // passions
    ),
    traits: creerTraits(["Travailleur acharné", "Optimiste"]),
    travail: "Construction", // tâche en cours
  },
  {
    id: 2,
    prenom: "Marie",
    sexe: "femme",
    age: 24,
    sante: {
      pv: 100,
      pv_max: 100,
      malades: [],
      blessures: [],
    },
    aptitudes: creerAptitudes(
      { "Médecine": 6, "Social": 4, "Plantes": 3 },
      ["Médecine", "Social"]
    ),
    traits: creerTraits(["Beau", "Ascétique"]),
    travail: "Médecine",
  },
];

console.log(population);

function experience(perso,aptitude){

}

function travail(){

}