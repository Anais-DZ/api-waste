# ♻️ API Waste – Vérification des déchets
Cette API a été développée pour alimenter un site dédié au compostage et lombricompostage, [Ver'ify Compost](https://verify-compost.vercel.app/), que j'ai développé dans le cadre d'une formation dans le développement web.
Ne trouvant pas d’API publique adaptée pour récupérer des informations sur les déchets compostables, j’ai décidé de créer la mienne.
Elle permet de récupérer une liste de déchets et le type de conteneur dans lequel ils doivent être jetés (composteur, lombricomposteur, etc.).


🛠️ Backend en ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

🛠️ Base de données ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

🛠️ Hébergé via ![Render](https://img.shields.io/badge/Render-46E3B7?style=for-the-badge&logo=render&logoColor=white)

---

## 🚀 Accès à l'API

🔗 **URL publique** :  
`https://api-waste.onrender.com/`

---

## 📚 Fonctionnalité

### 🔎 Récupération de tous les déchets avec leur conteneur

- **Méthode** : `GET`
- **Route** : `/` (racine)
- **Réponse** : JSON

#### ✅ Exemple de réponse :

```json
[
  {
    "name_waste": "Coquilles d'œuf",
    "type_container": "Composteur et lombricomposteur"
  },
  {
    "name_waste": "Citron",
    "type_container": "Composteur"
  }
]
```

## 🧪 Comment tester l’API

### ✅ Avec Postman

- **Méthode** : `GET`  
- **URL** : `https://api-waste.onrender.com/`  
- 🔓 Aucun token ou authentification requis

---

### 💻 En JavaScript (frontend)

```js
const wasteApi = async () => {
  try {
    const response = await fetch('https://api-waste.onrender.com/');
    if (!response.ok) throw new Error('Erreur de récupération des données');
      const data = await response.json();
      console.log(data); // Affiche les déchets récupérés
    } catch (error) {
    console.error('Erreur lors de la récupération des données de l\'api', error);
  }
};
wasteApi();
```

## 🧱 Technologies utilisées

- **PHP** *(API)*
- **MySQL** *(base de données relationnelle)*
- **Docker** *(déploiement)*
- **Render** *(hébergement)*
- **JavaScript** *(appel frontend)*
- **JSON** *(format de réponse)*

---

## 🔐 Sécurité

- Les **variables d'environnement** (`bddhost`, `bddname`, `bddlogin`, `bddpassword`) sont **sécurisées**.
- 🔒 L'API est en **lecture seule** – aucune insertion ou modification de données via les routes

---

## 📄 Documentation de l'API

👉 [Lire la documentation](https://github.com/Anais-DZ/api-waste/blob/main/doc-api-waste.pdf)

# ♻️ API Waste – Vérification des déchets
Cette API a été développée pour alimenter un site dédié au compostage et lombricompostage, [Ver'ify Compost](https://verify-compost.vercel.app/), que j'ai développé dans le cadre d'une formation dans le développement web.
Ne trouvant pas d’API publique adaptée pour récupérer des informations sur les déchets compostables, j’ai décidé de créer la mienne.
Elle permet de récupérer une liste de déchets et le type de conteneur dans lequel ils doivent être jetés (composteur, lombricomposteur, etc.).


🛠️ Backend en ![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

🛠️ Base de données ![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)

🛠️ Hébergé via ![Render](https://img.shields.io/badge/Render-46E3B7?style=for-the-badge&logo=render&logoColor=white)

---

## 🚀 Accès à l'API

🔗 **URL publique** :  
`https://api-waste.onrender.com/`

---

## 📚 Fonctionnalité

### 🔎 Récupération de tous les déchets avec leur conteneur

- **Méthode** : `GET`
- **Route** : `/` (racine)
- **Réponse** : JSON

#### ✅ Exemple de réponse :

```json
[
  {
    "name_waste": "Coquilles d'œuf",
    "type_container": "Composteur et lombricomposteur"
  },
  {
    "name_waste": "Citron",
    "type_container": "Composteur"
  }
]
```

## 🧪 Comment tester l’API

### ✅ Avec Postman

- **Méthode** : `GET`  
- **URL** : `https://api-waste.onrender.com/`  
- 🔓 Aucun token ou authentification requis

---

### 💻 En JavaScript (frontend)

```js
const wasteApi = async () => {
  try {
    const response = await fetch('https://api-waste.onrender.com/');
    if (!response.ok) throw new Error('Erreur de récupération des données');
      const data = await response.json();
      console.log(data); // Affiche les déchets récupérés
    } catch (error) {
    console.error('Erreur lors de la récupération des données de l\'api', error);
  }
};
wasteApi();
```

## 🧱 Technologies utilisées

- **PHP** *(API)*
- **MySQL** *(base de données relationnelle)*
- **Docker** *(déploiement)*
- **Render** *(hébergement)*
- **JavaScript** *(appel frontend)*
- **JSON** *(format de réponse)*

---

## 🔐 Sécurité

- Les **variables d'environnement** (`bddhost`, `bddname`, `bddlogin`, `bddpassword`) sont **sécurisées**.
- 🔒 L'API est en **lecture seule** – aucune insertion ou modification de données via les routes

---

## 📄 Documentation de l'API

👉 [Lire la documentation](https://github.com/Anais-DZ/api-waste/blob/main/doc-api-waste.pdf)
