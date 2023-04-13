var panorama, viewer, container, infospot;

container = document.querySelector( '#container' );

// panorama = new PANOLENS.ImagePanorama( 'img/abandoned_tiled_room_4k.jpg' );
// panorama = new PANOLENS.ImagePanorama( 'https://museumsformoove.s3.amazonaws.com/Miniature+Book+Museum/1.jpg' );
panorama = new PANOLENS.ImagePanorama( 'img/1.jpg' );

infospot = new PANOLENS.Infospot( 350, PANOLENS.DataImage.Info );
infospot.position.set( 0, 0, -5000 );
infospot.addHoverText( 'Hello Panolens', 30 );
panorama.add( infospot );

viewer = new PANOLENS.Viewer( { container: container } );
viewer.add( panorama );
