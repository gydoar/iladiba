<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Framework',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();


// ------------------------------
// Social  -
// ------------------------------
$options[]      = array(
  'name'        => 'redes-sociales',
  'title'       => 'Redes Sociales',
  'icon'        => 'fa fa-facebook-official',


  'fields'      => array(

    array(
        'type'         => 'subheading',
        'content'      => 'Redes sociales',
      ),

    array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Configure las opciones de sus redes sociales.',
        ),
    // begin: a field
    array(
      'id'      => 'twitter_link',
      'type'    => 'text',
      'title'   => 'Twitter',
      'desc'    => 'Agregue el link de su red social',
      'default' => 'https://twitter.com/ComunILADIBA',
    ),

    array(
      'id'      => 'facebook_link',
      'type'    => 'text',
      'title'   => 'Facebook',
      'desc'    => 'Agregue el link de su red social',
      'default' => 'https://www.facebook.com/ComunidadILADIBA',
    ),

    array(
      'id'      => 'linkedin_link',
      'type'    => 'text',
      'title'   => 'Linkedin',
      'desc'    => 'Agregue el link de su red social',
      'default' => 'https://www.linkedin.com/groups/6722567/profile',
    ),

  ),

);


// ------------------------------
// Publicidad   -
// ------------------------------
$options[]   = array(
  'name'     => 'publicidad',
  'title'    => 'Publicidad',
  'icon'     => 'fa fa-money',
  'sections' => array(

     // -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'cabecera',
      'title'     => 'Cabecera',
      'icon'      => 'fa fa-arrow-up',

      // begin: fields
      'fields'    => array(

        array(
        'type'         => 'subheading',
        'content'      => 'Publicidad de la cabecera',
          ),

        array(
              'type'    => 'notice',
              'class'   => 'info',
              'content' => 'Configure las opciones de publicidad para la cabecera de la página.',
            ),

        // Campo banner header escritorio
        array(
          'id'    => 'publicidad_header_desktop',
          'type'  => 'wysiwyg',
          'title' => 'Escritorio',
          'desc'  => 'Agregue banner para una pantalla de escritorio 1200 x 60px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

        // Campo banner header tablet
        array(
          'id'    => 'publicidad_header_tablet',
          'type'  => 'wysiwyg',
          'title' => 'Tablet',
          'desc'  => 'Agregue banner para una pantalla de tablet 728 x 90px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

        // Campo banner header Smartphone
        array(
          'id'    => 'publicidad_header_smartphone',
          'type'  => 'wysiwyg',
          'title' => 'Smartphone',
          'desc'  => 'Agregue banner para una pantalla de smartphone 320 x 50px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

        ),
        
      ),




      //Publicidad Sidebar

      array(
        'name'      => 'sidebar',
        'title'     => 'Sidebar',
        'icon'      => 'fa fa-arrow-right',
  

      // begin: fields
      'fields'    => array(

        array(
        'type'         => 'subheading',
        'content'      => 'Publicidad del sidebar',
          ),

        array(
              'type'    => 'notice',
              'class'   => 'info',
              'content' => 'Configure las opciones de publicidad del sidebar para el INICIO',
            ),

        // Banner sidebar home 300 x 250px
        array(
          'id'    => 'publicidad_sidebar_home',
          'type'  => 'wysiwyg',
          'title' => 'Sidebar Home',
          'desc'  => 'Agregue el banner en el Sidebar del home 300 x 250px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

        array(
              'type'    => 'notice',
              'class'   => 'info',
              'content' => 'Configure las opciones de publicidad del sidebar para el ARTICULO',
            ),

        // Banner sidebar post 300 x 250px
        array(
          'id'    => 'publicidad_sidebar_post',
          'type'  => 'wysiwyg',
          'title' => 'Sidebar Articulo',
          'desc'  => 'Agregue el banner en el Sidebar del articulo 160 x 600px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

        ),
    ),

      //Publicidad Footer

      array(
        'name'      => 'pie',
        'title'     => 'Pie',
        'icon'      => 'fa fa-arrow-down ',
  

      // begin: fields
      'fields'    => array(

        array(
        'type'         => 'subheading',
        'content'      => 'Publicidad de la cabecera',
          ),

        array(
              'type'    => 'notice',
              'class'   => 'info',
              'content' => 'Configure las opciones de publicidad para el pie de la página.',
            ),

        // Campo banner footer escritorio
        array(
          'id'    => 'publicidad_footer_desktop',
          'type'  => 'wysiwyg',
          'title' => 'Escritorio',
          'desc'  => 'Agregue banner para una pantalla de escritorio 1200 x 60px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

        // Campo banner footer tablet
        array(
          'id'    => 'publicidad_footer_tablet',
          'type'  => 'wysiwyg',
          'title' => 'Tablet',
          'desc'  => 'Agregue banner para una pantalla de tablet 728 x 90px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

        // Campo banner footer Smartphone
        array(
          'id'    => 'publicidad_footer_smartphone',
          'type'  => 'wysiwyg',
          'title' => 'Smartphone',
          'desc'  => 'Agregue banner para una pantalla de smartphone 320 x 50px',
          'help'  => 'Agregue el código HTML, IFRAME, JAVASCRIPT o IMAGEN desde la misma página',
            'settings' => array(
            'textarea_rows' => 3,
            'tinymce'       => false,
            'media_buttons' => true,
          )
        ),

      ),
    ),
  ),  
);
// ------------------------------
// Footer   -
// ------------------------------
$options[]   = array(
  'name'     => 'footer',
  'title'    => 'Footer',
  'icon'     => 'fa fa-plus-circle',
  'sections' => array(

    // -----------------------------
    // begin: text options         -
    // -----------------------------
    array(
      'name'      => 'logos_options',
      'title'     => 'Logos',
      'icon'      => 'fa fa-image',

      // begin: fields
      'fields'    => array(

      array(
        'type'         => 'subheading',
        'content'      => 'Logos educación en salud',
      ),

      array(
        'type'    => 'notice',
        'class'   => 'info',
        'content' => 'Configure los logos que apareceran en el pie de la página',
      ),

        // begin: a field
        // Logo 1
       array(
        'id'        => 'logo_footer_1',
        'type'      => 'image',
        'title'     => 'Logo #1',
        'desc'      => 'Agregar logo de 132px de ancho.',
        'add_title' => 'Subir',
      ),
       array(
        'id'      => 'link_footer_1', // another unique id
        'type'    => 'text',
        'title'   => 'Link logo 1',
        'desc'    => 'Agregue el link para el logo #1',
      ),

        array(
        'type'         => 'subheading',
        'content'      => 'Logo #2',
      ),
        // Logo 2
        array(
        'id'        => 'logo_footer_2',
        'type'      => 'image',
        'title'     => 'Logo #2',
        'desc'      => 'Agregar logo de 132px de ancho.',
        'add_title' => 'Subir',
      ),

        array(
        'id'      => 'link_footer_2', // another unique id
        'type'    => 'text',
        'title'   => 'Link logo 2',
        'desc'    => 'Agregue el link para el logo #2',
      ),
        array(
        'type'         => 'subheading',
        'content'      => 'Logo #3',
      ),
        // Logo 3
        array(
        'id'        => 'logo_footer_3',
        'type'      => 'image',
        'title'     => 'Logo #3',
        'desc'      => 'Agregar logo de 132px de ancho.',
        'add_title' => 'Subir',
      ),

        array(
        'id'      => 'link_footer_3', // another unique id
        'type'    => 'text',
        'title'   => 'Link logo 3',
        'desc'    => 'Agregue el link para el logo #3',
      ),

         array(
        'type'         => 'subheading',
        'content'      => 'Logo #4',
      ),
        // Logo 4
        array(
        'id'        => 'logo_footer_4',
        'type'      => 'image',
        'title'     => 'Logo #4',
        'desc'      => 'Agregar logo de 132px de ancho.',
        'add_title' => 'Subir',
      ),

        array(
        'id'      => 'link_footer_4', // another unique id
        'type'    => 'text',
        'title'   => 'Link logo 4',
        'desc'    => 'Agregue el link para el logo #4',
      ),
        // Logo 5
         array(
        'type'         => 'subheading',
        'content'      => 'Logo #5',
      ),
        array(
        'id'        => 'logo_footer_5',
        'type'      => 'image',
        'title'     => 'Logo #5',
        'desc'      => 'Agregar logo de 132px de ancho.',
        'add_title' => 'Subir',
      ),
        array(
        'id'      => 'link_footer_5', // another unique id
        'type'    => 'text',
        'title'   => 'Link logo 5',
        'desc'    => 'Agregue el link para el logo #5',
      ),
        // end: a field


      ), // end: fields

    ), // end: text options

    // -----------------------------
    // begin: Contacto     -
    // -----------------------------
    array(
      'name'      => 'contacto_options',
      'title'     => 'Contacto',
      'icon'      => 'fa fa-map-marker',
      'fields'    => array(


        array(
          'type'         => 'subheading',
          'content'      => 'Contacto',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Configure los datos de contacto',
        ),

        array(
          'id'    => 'direccion_footer', // this is must be unique
          'type'  => 'text',
          'title' => 'Dirección',
          'default' => 'Calle 30A No. 6- 22',
          'desc'  =>  'Agregue su dirección',
        ),

        array(
          'id'    => 'ciudad_footer', // this is must be unique
          'type'  => 'text',
          'title' => 'Ciudad, Pais',
          'default' => 'Bogotá, Colombia',
          'desc'  =>  'Agregue la ciudad y el país',
        ),


        // Seccion de telefonos
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Agrege los teléfonos',
        ),

        array(
          'id'    => 'telefono_movil_footer', // this is must be unique
          'type'  => 'text',
          'title' => 'Teléfono Móvil',
          'default' => '+57 310 281 6466',
          'desc'  =>  'Agregue su teléfono',
        ),

        array(
          'id'    => 'telefono_fijo_footer', // this is must be unique
          'type'  => 'text',
          'title' => 'Teléfono fijo',
          'default' => '+571 232 5817',
          'desc'  =>  'Agregue un teléfono adicional',
        ),

      ),

    ), // end: textarea options

    // -----------------------------
    // begin: copyright     -
    // -----------------------------
    array(
      'name'      => 'copyright_options',
      'title'     => 'Copyright',
      'icon'      => 'fa fa-copyright',
      'fields'    => array(

         array(
          'type'         => 'subheading',
          'content'      => 'Copyright',
        ),

        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Configure los Copyright de su página',
        ),

        array(
          'id'    => 'titulo_copyright',
          'type'  => 'textarea',
          'title' => 'Titulo Copyright',
          'default' => 'Todos los derechos reservados a Editorial Maldonado S.A - ISSN 1657 - 5628',
        ),

        array(
          'id'    => 'parrafo_copyright',
          'type'  => 'textarea',
          'title' => 'Parrafo Copyright',
          'default' => 'Se prohíbe la reproducción total o parcial de los contenidos, así como <br>su traducción a cualquier idioma sin autorización escrita del titular',
        ),

      ),
    ), // end: checkbox options

  )
);


// Sidebar Home (de interés)

$options[]      = array(
  'name'        => 'sidebar_home',
  'title'       => 'Sidebar Home',
  'icon'        => 'fa fa-arrow-right',


  'fields'      => array(

    array(
        'type'         => 'subheading',
        'content'      => 'Sidebar Home',
      ),

    array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Configure las opciones del sidebar en el INICIO',
        ),

        // begin: a field
        array(
          'id'      => 'titulo_de_interes_sidebar',
          'type'    => 'text',
          'title'   => 'Titulo noticia de interés',
          'desc'    => 'Agregue el titulo de la noticia de interés',
          'default' => 'Actualización en cirugía de la obesidad (cirugía bariátrica)...',
        ),

        array(
          'id'      => 'link_de_interes_sidebar',
          'type'    => 'text',
          'title'   => 'Link noticia de interés',
          'desc'    => 'Agregue el link de la noticia de interés',
          'default' => 'http://google.com.co',
        ),

        array(
          'id'      => 'video_de_interes_sidebar',
          'type'    => 'text',
          'title'   => 'Video de interés',
          'desc'    => 'Agregue ID de Youtube para el video de interés',
          'default' => 'LvnElzX0xts',
        ),

  ),

);



// Editor Jefe
$options[]      = array(
  'name'        => 'editor_jefe',
  'title'       => 'Editor Jefe',
  'icon'        => 'fa fa-arrow-right',


  'fields'      => array(

    array(
        'type'         => 'subheading',
        'content'      => 'Información del Sr Editor en la revista, JORGE MALDONADO',
      ),

    array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Configure las opciones del EDITOR',
        ),

        // begin: a field
        array(
          'id'      => 'titulo_editor_jefe',
          'type'    => 'text',
          'title'   => 'Titulo editor jefe',
          'desc'    => 'Agregue el titulo del editor',
          'default' => 'Jorge E. Maldonado MD, PhD, FACP',
        ),

        array(
          'id'        => 'image_editor_jefe',
          'type'      => 'image',
          'title'     => 'Imagen editor jefe',
          'add_title' => 'Subir imagen',
          'desc'      => 'Agregar imagen de tamaño 227 x 260px',
        ),

        array(
          'id'    => 'parrafo_editor_jefe',
          'type'  => 'textarea',
          'title' => 'Parrafo editor jefe',
          'desc'  => 'Parrado del editor jefe',
          'default'  => 'Vicepresidente de Educación de la Federación Médica Colombiana; Miembro de Número de la Academia Nacional de Medicina; Profesor Titular de Medicina Mayo Clinic College of Medicine (1976); Profesor Visitante Universidad de Paris VII (1975); Profesor Visitante de la Universidad de Harvard (1985-1987); Internista-Hematólogo-Oncólogo Médico Certificado; Miembro de Sociedades de Oncología como American Society of Hematology, American Society of Clinical Oncology y American Association for Cancer Research.',
        ),

  ),

);












// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'A Seperator',
  'icon'   => 'fa fa-bookmark'
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);










CSFramework::instance( $settings, $options );
