<?php
/**
 * The template for codestar framework theme options.
 *
 * @package RB Free Theme
 * @subpackage Bashir Rased
 * @version Bashir Rased 1.1.3
 * @since Bashir Rased 1.1.3
 */

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $bashir_rased_data = 'bashir_rased_theme_option';
  
    //
    // Create options
    CSF::createOptions( $bashir_rased_data, array(
      'menu_title' => __('Bashir Rased Theme Options','bashir-rased'),
      'menu_slug'  => 'bashir_rased_theme_option_menu',
      'framework_title' => __('Bashir Rased Theme Options','bashir-rased'),
      'footer_credit' => __('Bashir Rased','bashir-rased')
    ) );

    /*****************************************************
    ************ Basic Information Section Start *********
    *****************************************************/
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-basic-info',
      'title'  => __('Basic Information','bashir-rased'),
      )
    );
  
    // Phone Number Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-basic-info',
      'title'  => __('Phone Numbers','bashir-rased'),
      'fields' => array(
  
        // Phone Number 1
        array(
          'id'    => 'bashir-rased-phone-number-1',
          'type'  => 'number',
          'title' => __('Phone Number 1','bashir-rased')
        ),
        
        // Phone Number 2
        array(
            'id'    => 'bashir-rased-phone-number-2',
            'type'  => 'number',
            'title' => __('Phone Number 2','bashir-rased')
        )
  
      )
    ) );

    // E-mail Address Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-basic-info',
      'title'  => __('E-mail Address','bashir-rased'),
      'fields' => array(

        // E-mail Address 1
        array(
            'id'    => 'bashir-rased-email-address-1',
            'type'  => 'text',
            'title' => __('E-mail Address 1','bashir-rased')
        ),
          
        // E-mail Address 2
        array(
            'id'    => 'bashir-rased-email-address-2',
            'type'  => 'text',
            'title' => __('E-mail Address 2','bashir-rased')
        )
  
      )
    ) );

    // Your Address Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-basic-info',
      'title'  => __('Your Address','bashir-rased'),
      'fields' => array(

        // Your Address
        array(
            'id'    => 'bashir-rased-address',
            'type'  => 'text',
            'title' => __('Your Address','bashir-rased')
        )
  
      )
    ) );
    /*****************************************************
    *********** Basic Information Section Ends ***********
    *****************************************************/

    /*****************************************************
    ************** Homepage Header Section Start *********
    *****************************************************/
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-header-section',
      'title'  => __('Homepage Header','bashir-rased'),
      )
    );

    // Homepage Header Subtitle Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-header-section',
      'title'  => __('Header Subtitle','bashir-rased'),
      'fields' => array(
  
        // Subtitle First Part
        array(
          'id'    => 'bashir-rased-header-subtitle-first',
          'type'  => 'text',
          'title' => __('Subtitle First Part','bashir-rased')
        ),

        // Subtitle Your Name Add
        array(
          'id'    => 'bashir-rased-header-subtitle-name',
          'type'  => 'text',
          'title' => __('Subtitle Your Name Add','bashir-rased')
        ),
        
        // Subtitle Last Part
        array(
            'id'    => 'bashir-rased-header-subtitle-last',
            'type'  => 'text',
            'title' => __('Subtitle Last Part','bashir-rased')
        )
  
      )
    ) );

    // Homepage Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-header-section',
      'title'  => __('Header Title','bashir-rased'),
      'fields' => array(
  
        // Title First Part
        array(
          'id'    => 'bashir-rased-header-title-first',
          'type'  => 'text',
          'title' => __('Title First Part','bashir-rased')
        ),

        // Title Last Part
        array(
          'id'    => 'bashir-rased-header-title-last',
          'type'  => 'repeater',
          'title' => __('Title Last Part','bashir-rased'),
          'subtitle' => __('Add Your Designation','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-header-title-last-option',
              'type'  => 'text',
              'title' => __('Title Last Part Option','bashir-rased')
            )        
          )
        )
  
      )
    ) );

    // Homepage Header Button Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-header-section',
      'title'  => __('Header Buttons','bashir-rased'),
      'fields' => array(
        
        // Button Adds
        array(
          'id'    => 'bashir-rased-header-btn-group',
          'type'  => 'group',
          'title' => __('Header Button Add','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-header-btn-link',
              'type'  => 'link',
              'title' => __('Header Button Link','bashir-rased')
            ),
          )
        )
  
      )
    ) );

    // Homepage Header Image Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-header-section',
      'title'  => __('Header Image','bashir-rased'),
      'fields' => array(
        
        // Image Add
        array(
          'id'    => 'bashir-rased-header-img',
          'type'  => 'media',
          'library' => 'image',
          'preview' => false,
          'title' => __('Header Image Add','bashir-rased')
          )
        )

    ) );
    /*****************************************************
    ************* Homepage Header Section Ends ***********
    *****************************************************/

    /*****************************************************
    ************ Homepage About Me Section Start *********
    *****************************************************/
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-about-section',
      'title'  => __('Homepage About Me','bashir-rased'),
      )
    );

    // Homepage About Me Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-about-section',
      'title'  => __('About Me Header Title','bashir-rased'),
      'fields' => array(
        
        // Header Title Black Color
        array(
          'id'    => 'bashir-rased-about-header-title-black',
          'type'  => 'text',
          'title' => __('Header Title Black Color','bashir-rased')
        ),

        // Header Title Theme Color
        array(
          'id'    => 'bashir-rased-about-header-title-theme-color',
          'type'  => 'text',
          'title' => __('Header Title Theme Color','bashir-rased')
        )

      )

    ) );

    // Homepage About Me Image Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-about-section',
      'title'  => __('About Me Image','bashir-rased'),
      'fields' => array(
        
        // Image Add
        array(
          'id'    => 'bashir-rased-about-img',
          'type'  => 'media',
          'library' => 'image',
          'preview' => false,
          'title' => __('About Me Section Image Add','bashir-rased')
          )
        )

    ) );

    // Homepage About Me Buttons Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-about-section',
      'title'  => __('About Me Buttons','bashir-rased'),
      'fields' => array(
        
        // Buttons Add
        array(
          'id'    => 'bashir-rased-about-btns',
          'type'  => 'group',
          'title' => __('About Me Section Buttons Add','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-about-btn-link',
              'type'  => 'link',
              'title' => __('About Me Section Button Link','bashir-rased')
            )
          )
        )

      )

    ) );

    // Homepage About Me Description Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-about-section',
      'title'  => __('About Me Description','bashir-rased'),
      'fields' => array(
        
        // Description Add
        array(
          'id'    => 'bashir-rased-about-desc',
          'type'  => 'wp_editor',
          'title' => __('About Me Section Description Add','bashir-rased')
          )
        )

    ) );

    // Homepage About Me Info Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-about-section',
      'title'  => __('About Me Info','bashir-rased'),
      'fields' => array(
        
        // Info Add
        array(
          'id'    => 'bashir-rased-about-info',
          'type'  => 'group',
          'title' => __('About Me Section Info Add','bashir-rased'),
          'fields' => array(            
            array(
              'id'    => 'bashir-rased-about-info-strong-text',
              'type'  => 'text',
              'title' => __('About Me Section Button Text','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-about-info-text',
              'type'  => 'text',
              'title' => __('About Me Section Button Text','bashir-rased')
            )
          )
        )

      )

    ) );
    /*****************************************************
    ************ Homepage About Me Section Ends *********
    *****************************************************/

    /*****************************************************
    ************ Homepage Hire Me Section Start **********
    *****************************************************/
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-hire-section',
      'title'  => __('Homepage Hire Me','bashir-rased'),
      )
    );

    // Homepage Hire Me Background Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-hire-section',
      'title'  => __('Hire Me Background','bashir-rased'),
      'fields' => array(
        
        // Hire Me Background Add
        array(
          'id'    => 'bashir-rased-hire-bg',
          'type'  => 'background',
          'background_image_preview' => false,
          'output' => '#bashir-rased-hire-me',
          'title' => __('Hire Me Background Add','bashir-rased')
        )

      )

    ) );

    // Homepage Hire Me Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-hire-section',
      'title'  => __('Hire Me Header Title','bashir-rased'),
      'fields' => array(
        
        // Hire Me Header Title Add
        array(
          'id'    => 'bashir-rased-hire-header-title',
          'type'  => 'text',
          'title' => __('Hire Me Header Title Add','bashir-rased')
        )

      )

    ) );

    // Homepage Hire Me Buttons Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-hire-section',
      'title'  => __('Hire Me Buttons','bashir-rased'),
      'fields' => array(
        
        // Buttons Add
        array(
          'id'    => 'bashir-rased-hire-btn-link',
          'type'  => 'link',
          'title' => __('Hire Me Section Button Link','bashir-rased')
        )

      )

    ) );
    /*****************************************************
    ************ Homepage Hire Me Section Ends ***********
    *****************************************************/

    /*****************************************************
    ********** Homepage My Skills Section Start **********
    *****************************************************/
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-skill-section',
      'title'  => __('Homepage My Skills','bashir-rased'),
      )
    );

    // Homepage My Skills Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-skill-section',
      'title'  => __('My Skills Header Title','bashir-rased'),
      'fields' => array(        

        // Header Title Theme Color
        array(
          'id'    => 'bashir-rased-skill-header-title-theme-color',
          'type'  => 'text',
          'title' => __('Header Title Theme Color','bashir-rased')
        ),
        
        // Header Title Black Color
        array(
          'id'    => 'bashir-rased-skill-header-title-black',
          'type'  => 'text',
          'title' => __('Header Title Black Color','bashir-rased')
        )

      )

    ) );

    // Homepage My Design Skills Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-skill-section',
      'title'  => __('My Design Skills Title','bashir-rased'),
      'fields' => array(        

        // Design Skills Title Add
        array(
          'id'    => 'bashir-rased-design-skills-title',
          'type'  => 'text',
          'title' => __('Design Skills Title Add','bashir-rased')
        )

      )

    ) );

    // Homepage My Design Skill Items Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-skill-section',
      'title'  => __('My Design Skill Items','bashir-rased'),
      'fields' => array(        

        // Design Skill Item
        array(
          'id'    => 'bashir-rased-design-skill-item',
          'type'  => 'group',
          'title' => __('Design Skill Item','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-design-skill-text',
              'type'  => 'text',
              'title' => __('Design Skill Text','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-design-skill-value',
              'type'  => 'number',
              'title' => __('Design Skill Value',
              'bashir-rased'),
              'subtitle' => __('% Value',
              'bashir-rased')
            ),
          )
        )

      )

    ) );

    // Homepage My Development Skills Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-skill-section',
      'title'  => __('My Development Skills Title','bashir-rased'),
      'fields' => array(        

        // Development Skills Title Add
        array(
          'id'    => 'bashir-rased-development-skills-title',
          'type'  => 'text',
          'title' => __('Development Skills Title Add','bashir-rased')
        )

      )

    ) );

    // Homepage My Development Skill Items Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-skill-section',
      'title'  => __('My Development Skill Items','bashir-rased'),
      'fields' => array(        

        // Development Skill Item
        array(
          'id'    => 'bashir-rased-development-skill-item',
          'type'  => 'group',
          'title' => __('Development Skill Item','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-development-skill-text',
              'type'  => 'text',
              'title' => __('Development Skill Text','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-development-skill-value',
              'type'  => 'number',
              'title' => __('Development Skill Value',
              'bashir-rased'),
              'subtitle' => __('% Value',
              'bashir-rased')
            ),
          )
        )

      )

    ) );

    // Homepage My Language Skills Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-skill-section',
      'title'  => __('My Language Skills Title','bashir-rased'),
      'fields' => array(        

        // Language Skills Title Add
        array(
          'id'    => 'bashir-rased-language-skills-title',
          'type'  => 'text',
          'title' => __('Language Skills Title Add','bashir-rased')
        )

      )

    ) );

    // Homepage My Language Skill Items Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-skill-section',
      'title'  => __('My Language Skill Items','bashir-rased'),
      'fields' => array(        

        // Language Skill Item
        array(
          'id'    => 'bashir-rased-language-skill-item',
          'type'  => 'group',
          'title' => __('Language Skill Item','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-language-skill-text',
              'type'  => 'text',
              'title' => __('Language Skill Text','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-language-skill-value-1',
              'type'  => 'icon',
              'title' => __('Language Skill Value 01',
              'bashir-rased'),
              'placeholder'  => __('Select an option',
              'bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-language-skill-value-2',
              'type'  => 'icon',
              'title' => __('Language Skill Value 02',
              'bashir-rased'),
              'placeholder'  => __('Select an option',
              'bashir-rased')
            ),            
            array(
              'id'    => 'bashir-rased-language-skill-value-3',
              'type'  => 'icon',
              'title' => __('Language Skill Value 03',
              'bashir-rased'),
              'placeholder'  => __('Select an option',
              'bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-language-skill-value-4',
              'type'  => 'icon',
              'title' => __('Language Skill Value 04',
              'bashir-rased'),
              'placeholder'  => __('Select an option',
              'bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-language-skill-value-5',
              'type'  => 'icon',
              'title' => __('Language Skill Value 05',
              'bashir-rased'),
              'placeholder'  => __('Select an option',
              'bashir-rased')
            ),
          )
        )

      )

    ) );
    /*****************************************************
    ********** Homepage My Skills Section Ends ***********
    *****************************************************/

    /*****************************************************
    ********** Homepage My Resume Section Start **********
    *****************************************************/
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-resume-section',
      'title'  => __('Homepage My Resume','bashir-rased'),
      )
    );

    // Homepage My Resume Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-resume-section',
      'title'  => __('My Resume Header Title','bashir-rased'),
      'fields' => array(        

        // Header Title Theme Color
        array(
          'id'    => 'bashir-rased-resume-header-title-theme-color',
          'type'  => 'text',
          'title' => __('Header Title Theme Color','bashir-rased')
        ),
        
        // Header Title Black Color
        array(
          'id'    => 'bashir-rased-resume-header-title-black',
          'type'  => 'text',
          'title' => __('Header Title Black Color','bashir-rased')
        )

      )

    ) );

    // Homepage My Work Experiance Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-resume-section',
      'title'  => __('My Work Experiance Title','bashir-rased'),
      'fields' => array(        

        // My Work Experiance Title Add
        array(
          'id'    => 'bashir-rased-work-experiance-title',
          'type'  => 'text',
          'title' => __('My Work Experiance Title Add','bashir-rased')
        )

      )

    ) );

    // Homepage My Work Experiance Items Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-resume-section',
      'title'  => __('My Work Experiance Items','bashir-rased'),
      'fields' => array(        

        // My Work Experiance Item
        array(
          'id'    => 'bashir-rased-work-experiance-item',
          'type'  => 'group',
          'title' => __('My Work Experiance Item','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-work-experiance-title',
              'type'  => 'text',
              'title' => __('Work Experiance Item Title','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-work-experiance-duration',
              'type'  => 'text',
              'title' => __('Work Experiance Item Duration','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-work-experiance-desc',
              'type'  => 'textarea',
              'title' => __('Work Experiance Item Description','bashir-rased')
            )
          )
        )

      )

    ) );

    // Homepage Certification Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-resume-section',
      'title'  => __('Certification Title','bashir-rased'),
      'fields' => array(        

        // Certification Title Add
        array(
          'id'    => 'bashir-rased-certification-title',
          'type'  => 'text',
          'title' => __('Certification Title Add','bashir-rased')
        )

      )

    ) );

    // Homepage Certification Items Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-resume-section',
      'title'  => __('Certification Items','bashir-rased'),
      'fields' => array(        

        // Certification Item
        array(
          'id'    => 'bashir-rased-certification-item',
          'type'  => 'group',
          'title' => __('Certification Item','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-certification-title',
              'type'  => 'text',
              'title' => __('Certification Item Title','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-certification-by',
              'type'  => 'text',
              'title' => __('Certification Item By','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-certification-desc',
              'type'  => 'textarea',
              'title' => __('Certification Item Description','bashir-rased')
            )
          )
        )

      )

    ) );
    /*****************************************************
    ********** Homepage My Resume Section Ends ***********
    *****************************************************/

    /*****************************************************
    ********** Homepage My Services Section Start ********
    *****************************************************/
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-service-section',
      'title'  => __('Homepage My Services','bashir-rased'),
      )
    );

    // Homepage My Services Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-service-section',
      'title'  => __('My Services Header Title','bashir-rased'),
      'fields' => array(        

        // Header Title Theme Color
        array(
          'id'    => 'bashir-rased-service-header-title-theme-color',
          'type'  => 'text',
          'title' => __('Header Title Theme Color','bashir-rased')
        ),
        
        // Header Title Black Color
        array(
          'id'    => 'bashir-rased-service-header-title-black',
          'type'  => 'text',
          'title' => __('Header Title Black Color','bashir-rased')
        )

      )

    ) );

    // Homepage My Services Items Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-service-section',
      'title'  => __('My Services Items','bashir-rased'),
      'fields' => array(        

        // My Services Item
        array(
          'id'    => 'bashir-rased-service-item',
          'type'  => 'group',
          'title' => __('My Services Item','bashir-rased'),
          'fields' => array(
            array(
              'id'    => 'bashir-rased-service-item-title',
              'type'  => 'text',
              'title' => __('My Services Item Title','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-service-item-icon',
              'type'  => 'icon',
              'title' => __('My Services Item Icon','bashir-rased')
            ),
            array(
              'id'    => 'bashir-rased-service-item-desc',
              'type'  => 'textarea',
              'title' => __('My Services Item Description','bashir-rased')
            )
          )
        )

      )

    ) );
    /*****************************************************
    ********** Homepage My Services Section Ends *********
    *****************************************************/   

    /*****************************************************
    ********** Homepage Subscribe Section Start **********
    *****************************************************/
    // Homepage Subscribe Section
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-subscribe-section',
      'title'  => __('Homepage Subscribe','bashir-rased'),
      )
    );

    // Homepage Subscribe Background Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-subscribe-section',
      'title'  => __('Subscribe Background','bashir-rased'),
      'fields' => array(
        
        // Subscribe Background Add
        array(
          'id'    => 'bashir-rased-subscribe-bg',
          'type'  => 'background',
          'background_image_preview' => false,
          'output' => '#bashir-rased-subscribe',
          'title' => __('Subscribe Background Add','bashir-rased')
        )

      )

    ) );

    // Homepage Subscribe Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-subscribe-section',
      'title'  => __('Subscribe Header Title','bashir-rased'),
      'fields' => array(
        
        // Subscribe Header Title Add
        array(
          'id'    => 'bashir-rased-subscribe-header-title',
          'type'  => 'text',
          'title' => __('Subscribe Header Title Add','bashir-rased')
        )

      )

    ) );
    /*****************************************************
    ********** Homepage Subscribe Section Ends ***********
    *****************************************************/

    /*****************************************************
    *********** Homepage Contact Me Section Start ********
    *****************************************************/
    // Homepage Contact Me Section
    CSF::createSection( $bashir_rased_data, array(
      'id'  => 'bashir-rased-contact-section',
      'title'  => __('Homepage Contact Me','bashir-rased')
      )
    );

    // Homepage Contact Me Header Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-contact-section',
      'title'  => __('Contact Me Header Title','bashir-rased'),
      'fields' => array(

        // Header Title Black Color
        array(
          'id'    => 'bashir-rased-contact-header-title-black',
          'type'  => 'text',
          'title' => __('Header Title Black Color','bashir-rased')
        ),

        // Header Title Theme Color
        array(
          'id'    => 'bashir-rased-contact-header-title-theme-color',
          'type'  => 'text',
          'title' => __('Header Title Theme Color','bashir-rased')
        )

      )

    ) );

    // Homepage Massage Me Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-contact-section',
      'title'  => __('Massage Me Title','bashir-rased'),
      'fields' => array(        

        // Massage Me Title Add
        array(
          'id'    => 'bashir-rased-massage-title',
          'type'  => 'text',
          'title' => __('Massage Me Title Add','bashir-rased')
        )

      )

    ) );

    // Homepage Get in Touch Title Subsection
    CSF::createSection( $bashir_rased_data, array(
      'parent'  => 'bashir-rased-contact-section',
      'title'  => __('Get in Touch Title','bashir-rased'),
      'fields' => array(        

        // Get in Touch Title Add
        array(
          'id'    => 'bashir-rased-get-in-touch-title',
          'type'  => 'text',
          'title' => __('Get in Touch Title Add','bashir-rased')
        )

      )

    ) );
    /*****************************************************
    ********** Homepage Contact Me Section Ends **********
    *****************************************************/

}