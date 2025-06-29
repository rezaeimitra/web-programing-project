// get URL parameters
const params = new URLSearchParams(window.location.search);
const service = params.get('service');

// Defining the content of each fashion atelier service
const services = { 
    photoshoot: {
        title: 'Fashion Photoshoots',
        description: 'Experience high-end fashion photography tailored to your style. Whether for editorial, personal branding, or portfolio shoots – Mira Atelier captures elegance and creativity in every frame.'
    },
    styling: {
        title: 'Personal Styling',
        description: 'Our fashion stylists provide personalized wardrobe planning, shopping assistance, and styling tips to enhance your everyday or event-specific looks. Find your signature style with us.'
    },
    makeup: {
        title: 'Professional Makeup',
        description: 'Get stunning makeup looks for any occasion – from natural glam to editorial beauty. Our artists use high-quality products and industry techniques to highlight your best features.'
    },
    runway: {
        title: 'Runway Show Coordination',
        description: 'From model casting to styling and stage direction, Mira Atelier manages all aspects of runway show production. We ensure a flawless presentation that reflects your brand’s identity.'
    },
    wardrobe: {
        title: 'Wardrobe Consultation',
        description: 'Let us refine your closet with expert advice on outfit combinations, seasonal must-haves, and capsule wardrobe planning. A stylish and efficient wardrobe starts here.'
    },
    editorial: {
        title: 'Editorial Content Creation',
        description: 'We create captivating visual stories for magazines, social media, and fashion campaigns. From concept development to execution, our team brings your creative vision to life.'
    }
};

// Display service content if valid parameter exists
if (service && services.hasOwnProperty(service)) {
    document.getElementById('service-content').innerHTML = `
        <h3>${services[service].title}</h3>
        <p>${services[service].description}</p>
    `;
} else {
   // If there is no valid or incomplete parameter
    document.getElementById('service-content').innerHTML = `
        <p>Please select a valid service from the home page to see more details.</p>
    `;
}
