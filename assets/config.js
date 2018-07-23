//require all images
const imagesContext = require.context('../image', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);imagesContext.keys().forEach(imagesContext);