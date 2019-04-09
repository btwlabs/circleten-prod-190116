<?php 


$options['sites'] = array (
);
$options['profiles'] = array (
  0 => 'scout_profile',
  1 => 'standard',
  2 => 'minimal',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7016',
        'version' => '7.62',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.62',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'version' => '7.62',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.62',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'configure' => 'admin/config/development/logging',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.62',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.62',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.62',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.62',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'version' => '7.62',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'version' => '7.62',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/boot.test',
            6 => 'tests/bootstrap.test',
            7 => 'tests/cache.test',
            8 => 'tests/common.test',
            9 => 'tests/database_test.test',
            10 => 'tests/entity_crud.test',
            11 => 'tests/entity_crud_hook_test.test',
            12 => 'tests/entity_query.test',
            13 => 'tests/error.test',
            14 => 'tests/file.test',
            15 => 'tests/filetransfer.test',
            16 => 'tests/form.test',
            17 => 'tests/graph.test',
            18 => 'tests/image.test',
            19 => 'tests/lock.test',
            20 => 'tests/mail.test',
            21 => 'tests/menu.test',
            22 => 'tests/module.test',
            23 => 'tests/pager.test',
            24 => 'tests/password.test',
            25 => 'tests/path.test',
            26 => 'tests/registry.test',
            27 => 'tests/schema.test',
            28 => 'tests/session.test',
            29 => 'tests/tablesort.test',
            30 => 'tests/theme.test',
            31 => 'tests/unicode.test',
            32 => 'tests/update.test',
            33 => 'tests/xmlrpc.test',
            34 => 'tests/upgrade/upgrade.test',
            35 => 'tests/upgrade/upgrade.comment.test',
            36 => 'tests/upgrade/upgrade.filter.test',
            37 => 'tests/upgrade/upgrade.forum.test',
            38 => 'tests/upgrade/upgrade.locale.test',
            39 => 'tests/upgrade/upgrade.menu.test',
            40 => 'tests/upgrade/upgrade.node.test',
            41 => 'tests/upgrade/upgrade.taxonomy.test',
            42 => 'tests/upgrade/upgrade.trigger.test',
            43 => 'tests/upgrade/upgrade.translatable.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/upgrade.user.test',
            46 => 'tests/upgrade/update.aggregator.test',
            47 => 'tests/upgrade/update.trigger.test',
            48 => 'tests/upgrade/update.field.test',
            49 => 'tests/upgrade/update.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.62',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.62',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.62',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.62',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'field.info.class.inc',
            3 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.62',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.62',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.62',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.62',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7081',
        'version' => '7.62',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.62',
      ),
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.62',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.62',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.62',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.62',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.62',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'version' => '7.62',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7019',
        'version' => '7.62',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.62',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.62',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.62',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'version' => '7.62',
      ),
      'mcn_circleten' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/custom/mcn_circleten/mcn_circleten.module',
        'basename' => 'mcn_circleten.module',
        'name' => 'mcn_circleten',
        'info' => 
        array (
          'name' => 'MCN Circle10 glue',
          'description' => 'Modifcations for Circle10',
          'core' => '7.x',
          'package' => 'MCN',
          'files' => 
          array (
            0 => 'mcn_circleten.module',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'basic_page' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/basic_page/basic_page.module',
        'basename' => 'basic_page.module',
        'name' => 'basic_page',
        'info' => 
        array (
          'name' => 'Basic Page',
          'description' => 'Adds the Basic Page functionality and permissions',
          'core' => '7.x',
          'package' => 'MCN Features',
          'version' => '7.x-1.1',
          'project' => 'basic_page',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'mcn_base_feature',
            2 => 'mcn_wysiwyg',
            3 => 'node',
            4 => 'strongarm',
            5 => 'text',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
            ),
            'field_instance' => 
            array (
              0 => 'node-page-body',
            ),
            'node' => 
            array (
              0 => 'page',
            ),
            'user_permission' => 
            array (
              0 => 'create page content',
              1 => 'delete any page content',
              2 => 'delete own page content',
              3 => 'edit any page content',
              4 => 'edit own page content',
            ),
            'variable' => 
            array (
              0 => 'comment_page',
              1 => 'node_options_page',
              2 => 'node_submitted_page',
            ),
          ),
          'project path' => '/tmp',
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'mcn_base_feature' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/mcn_base_feature/mcn_base_feature.module',
        'basename' => 'mcn_base_feature.module',
        'name' => 'mcn_base_feature',
        'info' => 
        array (
          'name' => 'MCN Base Feature',
          'description' => 'Provides base tools for content editing and site administration.  Required by all features.',
          'core' => '7.x',
          'package' => 'MCN Features',
          'version' => '7.x-2.0',
          'project' => 'mcn_base_feature',
          'dependencies' => 
          array (
            0 => 'admin_menu',
            1 => 'admin_menu_toolbar',
            2 => 'admin_views',
            3 => 'block',
            4 => 'bulk_media_upload',
            5 => 'colorbox',
            6 => 'context',
            7 => 'context_ui',
            8 => 'contextual',
            9 => 'ctools',
            10 => 'features',
            11 => 'field_group',
            12 => 'file_entity',
            13 => 'googleanalytics',
            14 => 'image',
            15 => 'libraries',
            16 => 'link',
            17 => 'media',
            18 => 'mediafield',
            19 => 'menu',
            20 => 'node',
            21 => 'node_reference',
            22 => 'overlay',
            23 => 'path',
            24 => 'pathauto',
            25 => 'plupload',
            26 => 'references',
            27 => 'scheduler',
            28 => 'shortcut',
            29 => 'strongarm',
            30 => 'system',
            31 => 'taxonomy',
            32 => 'token',
            33 => 'toolbar',
            34 => 'transliteration',
            35 => 'user',
            36 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'taxonomy' => 
            array (
              0 => 'tags',
            ),
            'user_permission' => 
            array (
              0 => 'access administration menu',
              1 => 'access administration pages',
              2 => 'access content',
              3 => 'access content overview',
              4 => 'access contextual links',
              5 => 'access overlay',
              6 => 'access site in maintenance mode',
              7 => 'access site reports',
              8 => 'access toolbar',
              9 => 'access user profiles',
              10 => 'administer actions',
              11 => 'administer blocks',
              12 => 'administer content types',
              13 => 'administer features',
              14 => 'administer fieldgroups',
              15 => 'administer files',
              16 => 'administer google analytics',
              17 => 'administer image styles',
              18 => 'administer menu',
              19 => 'administer modules',
              20 => 'administer nodes',
              21 => 'administer pathauto',
              22 => 'administer permissions',
              23 => 'administer scheduler',
              24 => 'administer shortcuts',
              25 => 'administer site configuration',
              26 => 'administer taxonomy',
              27 => 'administer themes',
              28 => 'administer url aliases',
              29 => 'administer users',
              30 => 'block IP addresses',
              31 => 'bulk upload media',
              32 => 'bypass node access',
              33 => 'cancel account',
              34 => 'change own username',
              35 => 'create files',
              36 => 'create url aliases',
              37 => 'customize shortcut links',
              38 => 'delete terms in tags',
              39 => 'display drupal links',
              40 => 'edit terms in tags',
              41 => 'flush caches',
              42 => 'manage features',
              43 => 'notify of path changes',
              44 => 'opt-in or out of tracking',
              45 => 'schedule (un)publishing of nodes',
              46 => 'select account cancellation method',
              47 => 'switch shortcut sets',
              48 => 'use PHP for tracking visibility',
              49 => 'view own unpublished content',
              50 => 'view the administration theme',
            ),
            'user_role' => 
            array (
              0 => 'account manager',
              1 => 'administrator',
              2 => 'client',
              3 => 'developer',
            ),
            'variable' => 
            array (
              0 => 'configurable_timezones',
              1 => 'image_jpeg_quality',
              2 => 'image_toolkit',
              3 => 'pathauto_node_pattern',
              4 => 'site_frontpage',
              5 => 'user_register',
            ),
          ),
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'mcn_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/mcn_wysiwyg/mcn_wysiwyg.module',
        'basename' => 'mcn_wysiwyg.module',
        'name' => 'mcn_wysiwyg',
        'info' => 
        array (
          'name' => 'MCN wysiwyg',
          'description' => 'wysiwyg configuration',
          'core' => '7.x',
          'package' => 'MCN Features',
          'version' => '7.x-2.0',
          'project' => 'mcn_wysiwyg',
          'dependencies' => 
          array (
            0 => 'better_formats',
            1 => 'ckeditor_link',
            2 => 'ctools',
            3 => 'features',
            4 => 'filter',
            5 => 'image_resize_filter',
            6 => 'mcn_base_feature',
            7 => 'media',
            8 => 'media_wysiwyg',
            9 => 'strongarm',
            10 => 'wysiwyg',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'filter' => 
            array (
              0 => 'full_html',
            ),
            'user_permission' => 
            array (
              0 => 'access ckeditor link',
              1 => 'access media browser',
              2 => 'administer ckeditor link',
              3 => 'administer filters',
              4 => 'administer media browser',
              5 => 'show format selection for file',
              6 => 'show format selection for node',
              7 => 'show format selection for taxonomy_term',
              8 => 'show format selection for user',
              9 => 'show format tips',
              10 => 'show more format tips link',
              11 => 'use text format full_html',
            ),
            'variable' => 
            array (
              0 => 'better_formats_per_field_core',
              1 => 'ckeditor_link_type_selected',
              2 => 'filter_fallback_format',
            ),
            'wysiwyg' => 
            array (
              0 => 'full_html',
            ),
          ),
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'fpa' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fpa/fpa.module',
        'basename' => 'fpa.module',
        'name' => 'fpa',
        'info' => 
        array (
          'name' => 'Fast Permissions Administration',
          'description' => 'Fast filtering on permissions administration form.',
          'core' => '7.x',
          'package' => 'Administration',
          'version' => '7.x-2.6',
          'project' => 'fpa',
          'datestamp' => '1408744435',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.6',
      ),
      'addressfield' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'addressfield.migrate.inc',
            1 => 'views/addressfield_views_handler_field_administrative_area.inc',
            2 => 'views/addressfield_views_handler_field_country.inc',
            3 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'addressfield',
          'datestamp' => '1540579391',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.3',
      ),
      'resp_img' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/resp_img/resp_img.module',
        'basename' => 'resp_img.module',
        'name' => 'resp_img',
        'info' => 
        array (
          'name' => 'Responsive images and styles',
          'description' => 'Responsive images and styles',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'resp_img.module',
            1 => 'cache.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'resp_img',
          'datestamp' => '1340805730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.3',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'features',
            4 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.10',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_context' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.10',
      ),
      'date_all_day' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views.inc',
            5 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.10',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'tests/date_api.test',
            2 => 'tests/date.test',
            3 => 'tests/date_field.test',
            4 => 'tests/date_migrate.test',
            5 => 'tests/date_validation.test',
            6 => 'tests/date_timezone.test',
            7 => 'tests/date_views_pager.test',
            8 => 'tests/date_views_popup.test',
            9 => 'tests/date_form.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
        ),
        'schema_version' => '7005',
        'version' => '7.x-2.10',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.9',
          'project' => 'entity',
          'datestamp' => '1518620551',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.9',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.9',
          'project' => 'entity',
          'datestamp' => '1518620551',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'og_context' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_context/og_context.module',
        'basename' => 'og_context.module',
        'name' => 'og_context',
        'info' => 
        array (
          'name' => 'Organic groups context',
          'description' => 'Get a group from a viewed page.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/og_context_plugin_argument_default_group_context.inc',
            1 => 'includes/views/handlers/og_context_plugin_access_og_perm.inc',
            2 => 'og_context.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_ui/og_ui.module',
        'basename' => 'og_ui.module',
        'name' => 'og_ui',
        'info' => 
        array (
          'name' => 'Organic groups UI',
          'description' => 'Organic groups UI.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'views_bulk_operations',
          ),
          'core' => '7.x',
          'version' => '7.x-2.10',
          'files' => 
          array (
            0 => 'og_ui.test',
            1 => 'includes/views/handlers/og_ui_handler_area_og_membership_overview.inc',
            2 => 'includes/migrate/7000/add_field.inc',
            3 => 'includes/migrate/7000/populate_field.inc',
            4 => 'includes/migrate/7000/set_roles.inc',
          ),
          'configure' => 'admin/config/group',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.10',
      ),
      'og_field_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_field_access/og_field_access.module',
        'basename' => 'og_field_access.module',
        'name' => 'og_field_access',
        'info' => 
        array (
          'name' => 'Organic groups field access',
          'description' => 'Provide field access based on group.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og_field_access.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_access/og_access.module',
        'basename' => 'og_access.module',
        'name' => 'og_access',
        'info' => 
        array (
          'name' => 'Organic groups access control',
          'description' => 'Enable access control for private and public groups and group content.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'version' => '7.x-2.10',
          'files' => 
          array (
            0 => 'og_access.test',
          ),
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.10',
      ),
      'og_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_example/og_example.module',
        'basename' => 'og_example.module',
        'name' => 'og_example',
        'info' => 
        array (
          'name' => 'OG example',
          'description' => 'Example module to show Organic groups configuration that can be used as building block.',
          'core' => '7.x',
          'package' => 'Features',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entityreference_prepopulate',
            2 => 'features',
            3 => 'list',
            4 => 'message_notify',
            5 => 'og',
            6 => 'og_ui',
            7 => 'page_manager',
            8 => 'panels',
            9 => 'rules',
            10 => 'views_content',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
              1 => 'field_node_reference',
              2 => 'group_group',
              3 => 'og_group_ref',
            ),
            'field_instance' => 
            array (
              0 => 'message-og_new_content-field_node_reference',
              1 => 'node-group-body',
              2 => 'node-group-group_group',
              3 => 'node-post-body',
              4 => 'node-post-og_group_ref',
            ),
            'message_type' => 
            array (
              0 => 'og_new_content',
            ),
            'node' => 
            array (
              0 => 'group',
              1 => 'post',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'node_view_panel_context',
            ),
            'rules_config' => 
            array (
              0 => 'rules_og_new_content_message',
            ),
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og_register' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_register/og_register.module',
        'basename' => 'og_register.module',
        'name' => 'og_register',
        'info' => 
        array (
          'name' => 'Organic groups register',
          'description' => 'Allow subscribing to groups during the user registration.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og.module',
        'basename' => 'og.module',
        'name' => 'og',
        'info' => 
        array (
          'name' => 'Organic groups',
          'description' => 'API to allow associating content with groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'options',
            1 => 'list',
            2 => 'text',
            3 => 'entity',
            4 => 'entityreference',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og.info.inc',
            1 => 'includes/og.admin.inc',
            2 => 'includes/og.exception.inc',
            3 => 'includes/og.membership.inc',
            4 => 'includes/og.membership_type.inc',
            5 => 'includes/views/og.views.inc',
            6 => 'og.test',
            7 => 'includes/views/handlers/og_plugin_argument_validate_group.inc',
            8 => 'includes/views/handlers/og_plugin_argument_default_user_groups.inc',
            9 => 'includes/views/handlers/og_handler_field_group_audience_state.inc',
            10 => 'includes/views/handlers/og_handler_field_prerender_list.inc',
            11 => 'includes/views/handlers/og_handler_field_user_roles.inc',
            12 => 'includes/views/handlers/og_handler_field_group_permissions.inc',
            13 => 'includes/views/handlers/og_handler_field_og_membership_link_edit.inc',
            14 => 'includes/views/handlers/og_handler_field_og_membership_link_delete.inc',
            15 => 'includes/views/handlers/og_handler_filter_group_audience_state.inc',
            16 => 'includes/views/handlers/og_handler_filter_user_roles.inc',
            17 => 'includes/views/handlers/og_handler_relationship.inc',
            18 => 'includes/views/handlers/og_handler_relationship_membership_roles.inc',
            19 => 'includes/migrate/plugins/destinations/og_membership.inc',
            20 => 'includes/migrate/7000/og_add_fields.inc',
            21 => 'includes/migrate/7000/og_content.inc',
            22 => 'includes/migrate/7000/og_group.inc',
            23 => 'includes/migrate/7000/og_user.inc',
            24 => 'includes/migrate/7000/og_ogur_roles.migrate.inc',
            25 => 'includes/migrate/7000/og_ogur.migrate.inc',
            26 => 'includes/migrate/og.migrate.inc',
            27 => 'includes/migrate/7200/og_og_membership.migrate.inc',
            28 => 'includes/migrate/7200/og_roles.migrate.inc',
            29 => 'includes/migrate/7200/og_user_roles.migrate.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.10',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'context',
          'datestamp' => '1543594688',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.9',
          'project' => 'context',
          'datestamp' => '1543594688',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'version' => '7.x-3.9',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.9',
          'project' => 'context',
          'datestamp' => '1543594688',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-3.9',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.migrate.inc',
            1 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.3',
          'project' => 'pathauto',
          'datestamp' => '1444232655',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.3',
      ),
      'workbench_moderation' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_moderation/workbench_moderation.module',
        'basename' => 'workbench_moderation.module',
        'name' => 'workbench_moderation',
        'info' => 
        array (
          'name' => 'Workbench Moderation',
          'description' => 'Provides content moderation services',
          'package' => 'Workbench',
          'core' => '7.x',
          'configure' => 'admin/config/workbench/moderation',
          'files' => 
          array (
            0 => 'workbench_moderation.module',
            1 => 'includes/workbench_moderation_handler_field_history_link.inc',
            2 => 'includes/workbench_moderation_handler_field_links.inc',
            3 => 'includes/workbench_moderation_handler_field_state.inc',
            4 => 'includes/workbench_moderation_handler_filter_state.inc',
            5 => 'includes/workbench_moderation_handler_filter_moderated_type.inc',
            6 => 'includes/workbench_moderation_handler_filter_user_can_moderate.inc',
            7 => 'workbench_moderation.migrate.inc',
            8 => 'tests/external_node_update.test',
            9 => 'tests/workbench_moderation.test',
            10 => 'tests/workbench_moderation.files.test',
            11 => 'tests/workbench_moderation.perms.test',
            12 => 'tests/workbench_moderation.node_access.test',
            13 => 'tests/workbench_moderation.transition.test',
          ),
          'dependencies' => 
          array (
            0 => 'drafty',
          ),
          'version' => '7.x-3.0',
          'project' => 'workbench_moderation',
          'datestamp' => '1478119457',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.0',
      ),
      'omega_tools' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/omega_tools/omega_tools.module',
        'basename' => 'omega_tools.module',
        'name' => 'omega_tools',
        'info' => 
        array (
          'name' => 'Omega Tools',
          'description' => 'Provides additional functionality for the <a href="http://drupal.org/project/omega">Omega Theme</a>.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'omega_tools.module',
            1 => 'includes/omega_tools.admin.inc',
            2 => 'includes/omega_tools.drush.inc',
            3 => 'includes/omega_tools.wizard.inc',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'omega_tools',
          'datestamp' => '1329502543',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc4',
      ),
      'views_tree' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_tree/views_tree.module',
        'basename' => 'views_tree.module',
        'name' => 'views_tree',
        'info' => 
        array (
          'name' => 'Views Tree',
          'description' => 'A Views style plugin to display a tree of elements using the adjacency model.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_tree_plugin_style_tree.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'views_tree',
          'datestamp' => '1332368746',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup the Drupal database and files or migrate them to another environment.',
          'core' => '7.x',
          'configure' => 'admin/config/system/backup_migrate',
          'php' => '5.4',
          'files' => 
          array (
            0 => 'includes/crud.inc',
            1 => 'includes/destinations.inc',
            2 => 'includes/destinations.browser.inc',
            3 => 'includes/destinations.db.inc',
            4 => 'includes/destinations.db.mysql.inc',
            5 => 'includes/destinations.email.inc',
            6 => 'includes/destinations.file.inc',
            7 => 'includes/destinations.ftp.inc',
            8 => 'includes/destinations.nodesquirrel.inc',
            9 => 'includes/destinations.s3.inc',
            10 => 'includes/files.inc',
            11 => 'includes/filters.inc',
            12 => 'includes/filters.backup_restore.inc',
            13 => 'includes/filters.compression.inc',
            14 => 'includes/filters.encryption.inc',
            15 => 'includes/filters.statusnotify.inc',
            16 => 'includes/filters.utils.inc',
            17 => 'includes/locations.inc',
            18 => 'includes/profiles.inc',
            19 => 'includes/schedules.inc',
            20 => 'includes/sources.inc',
            21 => 'includes/sources.archivesource.inc',
            22 => 'includes/sources.db.inc',
            23 => 'includes/sources.db.mysql.inc',
            24 => 'includes/sources.filesource.inc',
            25 => 'tests/BmTestBase.test',
            26 => 'tests/BmTestBasics.test',
            27 => 'tests/BmTestProfiles.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'backup_migrate',
          'datestamp' => '1544925486',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7307',
        'version' => '7.x-3.6',
      ),
      'diff' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show differences between content revisions.',
          'core' => '7.x',
          'configure' => 'admin/config/content/diff',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-3.4',
          'project' => 'diff',
          'datestamp' => '1541401388',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7307',
        'version' => '7.x-3.4',
      ),
      'location_phone' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_phone/location_phone.module',
        'basename' => 'location_phone.module',
        'name' => 'location_phone',
        'info' => 
        array (
          'name' => 'Location Phone',
          'package' => 'Location',
          'description' => 'Allows you to add a phone number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_phone.views.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'version' => '7.x-3.7',
      ),
      'location_entity' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_entity/location_entity.module',
        'basename' => 'location_entity.module',
        'name' => 'location_entity',
        'info' => 
        array (
          'name' => 'Location Entity',
          'description' => 'Provide information about Location field to Entity module.',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'la' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_autofill/la.module',
        'basename' => 'la.module',
        'name' => 'la',
        'info' => 
        array (
          'name' => 'Location autofill',
          'description' => 'Fill up all locations with lat&lon data',
          'core' => '7.x',
          'package' => 'Location',
          'configure' => 'admin/config/services/la',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_www' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_www/location_www.module',
        'basename' => 'location_www.module',
        'name' => 'location_www',
        'info' => 
        array (
          'name' => 'Location www',
          'package' => 'Location',
          'description' => 'Allows you to add a www adress to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-3.7',
      ),
      'location_addanother' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_addanother/location_addanother.module',
        'basename' => 'location_addanother.module',
        'name' => 'location_addanother',
        'info' => 
        array (
          'name' => 'Location Add Another',
          'description' => 'Allows you to quickly add locations directly from a node without having to click \'edit\' first.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'location_node',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_email' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_email/location_email.module',
        'basename' => 'location_email.module',
        'name' => 'location_email',
        'info' => 
        array (
          'name' => 'Location Email',
          'package' => 'Location',
          'description' => 'Allows you to add an email address to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_email.views.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_fax' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_fax/location_fax.module',
        'basename' => 'location_fax.module',
        'name' => 'location_fax',
        'info' => 
        array (
          'name' => 'Location Fax',
          'package' => 'Location',
          'description' => 'Allows you to add a fax number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_fax.views.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'version' => '7.x-3.7',
      ),
      'location_generate' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_generate/location_generate.module',
        'basename' => 'location_generate.module',
        'name' => 'location_generate',
        'info' => 
        array (
          'name' => 'Location Generate',
          'description' => 'Bulk assign random latitude and longitudes to nodes.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel_generate',
            1 => 'location',
          ),
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_cck' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_cck/location_cck.module',
        'basename' => 'location_cck.module',
        'name' => 'location_cck',
        'info' => 
        array (
          'name' => 'Location CCK',
          'description' => 'Defines a Location field type.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'version' => '7.x-3.7',
      ),
      'location_search' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_search/location_search.module',
        'basename' => 'location_search.module',
        'name' => 'location_search',
        'info' => 
        array (
          'name' => 'Location Search',
          'package' => 'Location',
          'description' => 'Advanced search page for locations.',
          'configure' => 'admin/config/content/location/search',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_search.admin.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '5300',
        'version' => '7.x-3.7',
      ),
      'location_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_taxonomy/location_taxonomy.module',
        'basename' => 'location_taxonomy.module',
        'name' => 'location_taxonomy',
        'info' => 
        array (
          'name' => 'Location Taxonomy',
          'description' => 'Associate locations with taxonomy terms.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'taxonomy',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_node' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/location_node.module',
        'basename' => 'location_node.module',
        'name' => 'location_node',
        'info' => 
        array (
          'name' => 'Node Locations',
          'description' => 'Associate locations with nodes.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_user' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/location_user.module',
        'basename' => 'location_user.module',
        'name' => 'location_user',
        'info' => 
        array (
          'name' => 'User Locations',
          'description' => 'Associate locations with users.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'configure' => 'admin/config/people/accounts',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/location.module',
        'basename' => 'location.module',
        'name' => 'location',
        'info' => 
        array (
          'name' => 'Location',
          'package' => 'Location',
          'description' => 'The location module allows you to associate a geographic location with content and users. Users can do proximity searches by postal code.  This is useful for organizing communities that have a geographic presence.',
          'core' => '7.x',
          'configure' => 'admin/config/content/location',
          'files' => 
          array (
            0 => 'location.admin.inc',
            1 => 'location.georss.inc',
            2 => 'location.inc',
            3 => 'location.token.inc',
            4 => 'location.views.inc',
            5 => 'location.views_default.inc',
            6 => 'location.migrate.inc',
            7 => 'tests/location_testcase.test',
            8 => 'tests/cow.test',
            9 => 'tests/earth.test',
            10 => 'tests/google_geocoder.test',
            11 => 'tests/location_cck.test',
            12 => 'tests/location_cck2.test',
            13 => 'handlers/location_handler_argument_location_country.inc',
            14 => 'handlers/location_handler_argument_location_province.inc',
            15 => 'handlers/location_handler_argument_location_proximity.inc',
            16 => 'handlers/location_handler_field_location_additional.inc',
            17 => 'handlers/location_handler_field_location_address.inc',
            18 => 'handlers/location_handler_field_location_country.inc',
            19 => 'handlers/location_handler_field_location_distance.inc',
            20 => 'handlers/location_handler_field_location_province.inc',
            21 => 'handlers/location_handler_field_location_street.inc',
            22 => 'handlers/location_handler_filter_location_country.inc',
            23 => 'handlers/location_handler_filter_location_province.inc',
            24 => 'handlers/location_handler_sort_location_country.inc',
            25 => 'handlers/location_handler_sort_location_distance.inc',
            26 => 'handlers/location_views_handler_field_coordinates.inc',
            27 => 'handlers/location_views_handler_field_latitude.inc',
            28 => 'handlers/location_views_handler_field_longitude.inc',
            29 => 'handlers/location_views_handler_filter_proximity.inc',
            30 => 'plugins/contexts/location.inc',
            31 => 'plugins/relationships/location_from_node.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.7',
      ),
      'menu_attributes' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/menu_attributes/menu_attributes.module',
        'basename' => 'menu_attributes.module',
        'name' => 'menu_attributes',
        'info' => 
        array (
          'name' => 'Menu attributes',
          'description' => 'Allows administrators to specify custom attributes for menu items.',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/menu/settings',
          'files' => 
          array (
            0 => 'menu_attributes.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'menu_attributes',
          'datestamp' => '1455568740',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.0',
      ),
      'domaincontext' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domaincontext/domaincontext.module',
        'basename' => 'domaincontext.module',
        'name' => 'domaincontext',
        'info' => 
        array (
          'name' => 'Domain Context',
          'description' => 'Provides a Domain condition plugin for the Context module.',
          'package' => 'Domain Access',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'domain',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'plugins/domaincontext_context_condition_domain.inc',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'domaincontext',
          'datestamp' => '1330573242',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha1',
      ),
      'simplehtmldom' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/simplehtmldom/simplehtmldom.module',
        'basename' => 'simplehtmldom.module',
        'name' => 'simplehtmldom',
        'info' => 
        array (
          'name' => 'simplehtmldom API',
          'description' => 'A bridge between the PHP Simple HTML DOM Parser library and Drupal.',
          'core' => '7.x',
          'version' => '7.x-2.1',
          'project' => 'simplehtmldom',
          'datestamp' => '1395160457',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.1',
      ),
      'remote_file_source' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/remote_file_source/remote_file_source.module',
        'basename' => 'remote_file_source.module',
        'name' => 'remote_file_source',
        'info' => 
        array (
          'name' => 'Remote File Source',
          'description' => 'Provide a way to add external files without transfering the file locally.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'filefield_sources',
            1 => 'remote_stream_wrapper',
          ),
          'version' => '7.x-1.0',
          'project' => 'remote_file_source',
          'datestamp' => '1331310646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0',
      ),
      'term_depth' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'files' => 
          array (
            0 => 'tests/head_links.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/context.test',
            5 => 'tests/css.test',
            6 => 'tests/css_cache.test',
            7 => 'tests/ctools.plugins.test',
            8 => 'tests/ctools.test',
            9 => 'tests/math_expression.test',
            10 => 'tests/math_expression_stack.test',
            11 => 'tests/object_cache.test',
            12 => 'tests/object_cache_unit.test',
            13 => 'tests/page_tokens.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.14',
      ),
      'media_browser_plus' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media_browser_plus/media_browser_plus.module',
        'basename' => 'media_browser_plus.module',
        'name' => 'media_browser_plus',
        'info' => 
        array (
          'name' => 'Media Browser Plus for Media 2.x',
          'description' => 'Provides enhanced UX and additional features for Media.',
          'package' => 'Media',
          'core' => '7.x',
          'configure' => 'admin/config/media/media_browser_plus_settings',
          'dependencies' => 
          array (
            0 => 'media (7.x-2.x)',
            1 => 'taxonomy',
            2 => 'views_tree',
            3 => 'views_bulk_operations',
            4 => 'multiform',
          ),
          'files' => 
          array (
            0 => 'views/media_browser_plus_views_plugin_style_media_browser.inc',
            1 => 'views/media_browser_plus_views_handler_field_preview.inc',
            2 => 'views/media_browser_plus_views_handler_field_preview_vbo.inc',
            3 => 'views/media_browser_plus_views_handler_area_actions.inc',
            4 => 'views/media_browser_plus_views_handler_area_basket.inc',
            5 => 'views/media_browser_plus_views_handler_area_navigation.inc',
          ),
          'version' => '7.x-3.0-beta4',
          'project' => 'media_browser_plus',
          'datestamp' => '1471499341',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.0-beta4',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/webform.webformconditionals.inc',
            1 => 'includes/exporters/webform_exporter_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            4 => 'includes/exporters/webform_exporter.inc',
            5 => 'views/webform_handler_area_result_pager.inc',
            6 => 'views/webform_handler_field_form_body.inc',
            7 => 'views/webform_handler_field_is_draft.inc',
            8 => 'views/webform_handler_field_node_link_edit.inc',
            9 => 'views/webform_handler_field_node_link_results.inc',
            10 => 'views/webform_handler_field_submission_count.inc',
            11 => 'views/webform_handler_field_submission_data.inc',
            12 => 'views/webform_handler_field_submission_link.inc',
            13 => 'views/webform_handler_field_webform_status.inc',
            14 => 'views/webform_handler_filter_is_draft.inc',
            15 => 'views/webform_handler_filter_submission_data.inc',
            16 => 'views/webform_handler_filter_webform_status.inc',
            17 => 'views/webform_handler_numeric_data.inc',
            18 => 'views/webform_handler_relationship_submission_data.inc',
            19 => 'views/webform_plugin_row_submission_view.inc',
            20 => 'tests/WebformComponentsTestCase.test',
            21 => 'tests/WebformConditionalsTestCase.test',
            22 => 'tests/WebformGeneralTestCase.test',
            23 => 'tests/WebformPermissionsTestCase.test',
            24 => 'tests/WebformSubmissionTestCase.test',
            25 => 'tests/WebformTestCase.test',
          ),
          'version' => '7.x-4.19',
          'project' => 'webform',
          'datestamp' => '1546876989',
        ),
        'schema_version' => '7431',
        'version' => '7.x-4.19',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File Entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.33)',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_filter_schema_type.inc',
            5 => 'views/views_handler_field_file_filename.inc',
            6 => 'views/views_handler_field_file_link.inc',
            7 => 'views/views_handler_field_file_link_edit.inc',
            8 => 'views/views_handler_field_file_link_delete.inc',
            9 => 'views/views_handler_field_file_link_download.inc',
            10 => 'views/views_handler_field_file_link_usage.inc',
            11 => 'views/views_plugin_row_file_rss.inc',
            12 => 'views/views_plugin_row_file_view.inc',
            13 => 'file_entity.test',
            14 => 'file_entity_views.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.25',
          'project' => 'file_entity',
          'datestamp' => '1541794687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7216',
        'version' => '7.x-2.25',
      ),
      'calendar' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/calendar/calendar.module',
        'basename' => 'calendar.module',
        'name' => 'calendar',
        'info' => 
        array (
          'name' => 'Calendar',
          'description' => 'Views plugin to display views containing dates as Calendars.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_views',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/calendar_multiday.css',
            ),
          ),
          'files' => 
          array (
            0 => 'calendar.install',
            1 => 'calendar.module',
            2 => 'includes/calendar.views.inc',
            3 => 'includes/calendar_plugin_style.inc',
            4 => 'includes/calendar_plugin_row.inc',
            5 => 'includes/calendar.views_template.inc',
            6 => 'theme/theme.inc',
            7 => 'theme/calendar-style.tpl.php',
          ),
          'version' => '7.x-3.5',
          'project' => 'calendar',
          'datestamp' => '1413299943',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-3.5',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.migrate.inc',
            1 => 'tests/link.test',
            2 => 'tests/link.attribute.test',
            3 => 'tests/link.crud.test',
            4 => 'tests/link.crud_browser.test',
            5 => 'tests/link.token.test',
            6 => 'tests/link.entity_token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'link',
          'datestamp' => '1526190487',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.5',
      ),
      'redirect' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.controller.inc',
            1 => 'redirect.test',
            2 => 'views/redirect.views.inc',
            3 => 'views/redirect_handler_filter_redirect_type.inc',
            4 => 'views/redirect_handler_field_redirect_source.inc',
            5 => 'views/redirect_handler_field_redirect_redirect.inc',
            6 => 'views/redirect_handler_field_redirect_operations.inc',
            7 => 'views/redirect_handler_field_redirect_link_edit.inc',
            8 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-rc3',
          'project' => 'redirect',
          'datestamp' => '1436393342',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.0-rc3',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-3.9',
          'project' => 'views_slideshow',
          'datestamp' => '1496893153',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'views_slideshow_simple_pager' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_simple_pager/views_slideshow_simple_pager.module',
        'basename' => 'views_slideshow_simple_pager.module',
        'name' => 'views_slideshow_simple_pager',
        'info' => 
        array (
          'name' => 'Views Slideshow Simple Pager',
          'description' => 'Provides a simple pager for Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-3.9',
          'project' => 'views_slideshow',
          'datestamp' => '1496893153',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'views_slideshow',
          'datestamp' => '1496893153',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.9',
      ),
      'jquerymenu' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/jquerymenu/jquerymenu.module',
        'basename' => 'jquerymenu.module',
        'name' => 'jquerymenu',
        'info' => 
        array (
          'name' => 'Jquery Menu',
          'description' => 'Enables expandable jquery menus.',
          'package' => 'User Interface',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/jquerymenu/settings',
          'version' => '7.x-4.0-alpha3',
          'project' => 'jquerymenu',
          'datestamp' => '1351218712',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'version' => '7.x-4.0-alpha3',
      ),
      'workbench' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench/workbench.module',
        'basename' => 'workbench.module',
        'name' => 'workbench',
        'info' => 
        array (
          'name' => 'Workbench',
          'description' => 'Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'configure' => 'admin/config/workbench/settings',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-1.2',
          'project' => 'workbench',
          'datestamp' => '1358534592',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.2',
      ),
      'better_formats' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/better_formats/better_formats.module',
        'basename' => 'better_formats.module',
        'name' => 'better_formats',
        'info' => 
        array (
          'name' => 'Better Formats',
          'description' => 'Enhances the core input format system by managing input format defaults and settings.',
          'core' => '7.x',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.0-beta2',
          'project' => 'better_formats',
          'datestamp' => '1453922961',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.0-beta2',
      ),
      'domain_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain_blocks/domain_blocks.module',
        'basename' => 'domain_blocks.module',
        'name' => 'domain_blocks',
        'info' => 
        array (
          'name' => 'Domain Blocks',
          'description' => 'Provides domain specific visibility settings for blocks',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain (3.x)',
            1 => 'block',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'domain_blocks.install',
            1 => 'domain_blocks.module',
          ),
          'version' => '7.x-3.0',
          'project' => 'domain_blocks',
          'datestamp' => '1445361540',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.0',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Field Group',
          'description' => 'Provides the ability to group your fields on both form and display.',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/field_group.ui.test',
            1 => 'tests/field_group.display.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'field_group',
          'datestamp' => '1509751991',
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'version' => '7.x-1.6',
      ),
      'admin_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_views/admin_views.module',
        'basename' => 'admin_views.module',
        'name' => 'admin_views',
        'info' => 
        array (
          'name' => 'Administration views',
          'description' => 'Replaces all system object management pages in Drupal core with real views.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations (>=7.x-3.2)',
          ),
          'files' => 
          array (
            0 => 'plugins/views_plugin_display_system.inc',
            1 => 'plugins/views_plugin_access_menu.inc',
            2 => 'tests/admin_views.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'admin_views',
          'datestamp' => '1470165840',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.6',
      ),
      'ckeditor_link' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ckeditor_link/ckeditor_link.module',
        'basename' => 'ckeditor_link.module',
        'name' => 'ckeditor_link',
        'info' => 
        array (
          'name' => 'CKEditor Link',
          'description' => 'Easily create links to Drupal internal paths through CKEditor.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/ckeditor_link',
          'version' => '7.x-2.4',
          'project' => 'ckeditor_link',
          'datestamp' => '1454115840',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.4',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc6',
          'project' => 'admin_menu',
          'datestamp' => '1543859284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc6',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc6',
          'project' => 'admin_menu',
          'datestamp' => '1543859284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'version' => '7.x-3.0-rc6',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc6',
          'project' => 'admin_menu',
          'datestamp' => '1543859284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-rc6',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'image',
            1 => 'strongarm',
            2 => 'taxonomy',
            3 => 'views',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.11',
          'project' => 'features',
          'datestamp' => '1541050686',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.11',
      ),
      'multiform' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/multiform/multiform.module',
        'basename' => 'multiform.module',
        'name' => 'multiform',
        'info' => 
        array (
          'name' => 'Multiple forms',
          'description' => 'Allows displaying and submitting multiple forms in one form',
          'files' => 
          array (
            0 => 'multiform.module',
            1 => 'tests/multiform.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.6',
          'project' => 'multiform',
          'datestamp' => '1544155384',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.6',
      ),
      'views_flipped_table' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_flipped_table/views_flipped_table.module',
        'basename' => 'views_flipped_table.module',
        'name' => 'views_flipped_table',
        'info' => 
        array (
          'name' => 'Views Flipped Table',
          'description' => 'Table style with rows and columns flipped.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_flipped_table.module',
            1 => 'views_flipped_table.views.inc',
            2 => 'views_flipped_table.module',
            3 => 'views_flipped_table_plugin_style_flipped_table.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_summary_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_summary_taxonomy/views_summary_taxonomy.module',
        'basename' => 'views_summary_taxonomy.module',
        'name' => 'views_summary_taxonomy',
        'info' => 
        array (
          'name' => 'Views Taxonomy Summary',
          'description' => 'Provides a summary style plugin suitable for displaying hierarchical taxonomies.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'taxonomy',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_block' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_block/views_block.module',
        'basename' => 'views_block.module',
        'name' => 'views_block',
        'info' => 
        array (
          'name' => 'Views Type Block',
          'description' => 'Exposes blocks as Views objects.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'block',
            2 => 'views_bulk_operations',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_composite_exposed_form' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_composite_exposed_form/views_composite_exposed_form.module',
        'basename' => 'views_composite_exposed_form.module',
        'name' => 'views_composite_exposed_form',
        'info' => 
        array (
          'name' => 'Views Composite Exposed Form Plugin',
          'description' => 'Allows multiple exposed form plugins to be activated simultaneously.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_composite_exposed_form_plugin.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_filters_selective' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_filters_selective/views_filters_selective.module',
        'basename' => 'views_filters_selective.module',
        'name' => 'views_filters_selective',
        'info' => 
        array (
          'name' => 'Views Selective Exposed Filters',
          'description' => 'Restrict exposed filter values to those present in the result set.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_handler_filter_selective.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_display_block_path' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_display_block_path/views_display_block_path.module',
        'basename' => 'views_display_block_path.module',
        'name' => 'views_display_block_path',
        'info' => 
        array (
          'name' => 'Views Display Block Path',
          'description' => 'Extends block display plugin to support URL path and use exposed filter form without Ajax.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_perm' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_perm/views_perm.module',
        'basename' => 'views_perm.module',
        'name' => 'views_perm',
        'info' => 
        array (
          'name' => 'Views Perm',
          'description' => 'Exposes permission information to Views.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'domain_nav' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_nav/domain_nav.module',
        'basename' => 'domain_nav.module',
        'name' => 'domain_nav',
        'info' => 
        array (
          'name' => 'Domain Navigation',
          'description' => 'Navigation block and menu options for Domain Access',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'domain_nav.css',
            ),
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-3.16',
      ),
      'domain_source' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_source/domain_source.module',
        'basename' => 'domain_source.module',
        'name' => 'domain_source',
        'info' => 
        array (
          'name' => 'Domain Source',
          'description' => 'Creates a canonical source domain for linking to content from other domains.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/domain_source_handler_filter_domain_id.inc',
            1 => 'tests/domain_source.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.16',
      ),
      'domain_content' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_content/domain_content.module',
        'basename' => 'domain_content.module',
        'name' => 'domain_content',
        'info' => 
        array (
          'name' => 'Domain Content',
          'description' => 'Provides a content batch editing screen for each active domain.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.16',
      ),
      'domain_settings' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_settings/domain_settings.module',
        'basename' => 'domain_settings.module',
        'name' => 'domain_settings',
        'info' => 
        array (
          'name' => 'Domain Settings',
          'description' => 'Expanded site configuration options for Domain Access.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
            1 => 'domain_conf',
          ),
          'core' => '7.x',
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'version' => '7.x-3.16',
      ),
      'domain_strict' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_strict/domain_strict.module',
        'basename' => 'domain_strict.module',
        'name' => 'domain_strict',
        'info' => 
        array (
          'name' => 'Domain Strict',
          'description' => 'Forces users to be assigned to a domain in order to view content on that domain.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'domain_strict.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.16',
      ),
      'domain_alias' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_alias/domain_alias.module',
        'basename' => 'domain_alias.module',
        'name' => 'domain_alias',
        'info' => 
        array (
          'name' => 'Domain Alias',
          'description' => 'Advanced domain matching methods for Domain Access.',
          'core' => '7.x',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => '7.x-3.16',
      ),
      'domain_conf' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_conf/domain_conf.module',
        'basename' => 'domain_conf.module',
        'name' => 'domain_conf',
        'info' => 
        array (
          'name' => 'Domain Configuration',
          'description' => 'Advanced site configuration options for Domain Access.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/domain_conf.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => '7.x-3.16',
      ),
      'domain_theme' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_theme/domain_theme.module',
        'basename' => 'domain_theme.module',
        'name' => 'domain_theme',
        'info' => 
        array (
          'name' => 'Domain Theme',
          'description' => 'Assign themes to domains created by the Domain Access module',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.16',
      ),
      'domain' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain.module',
        'basename' => 'domain.module',
        'name' => 'domain',
        'info' => 
        array (
          'name' => 'Domain Access',
          'description' => 'A domain-based access control system',
          'package' => 'Domain Access',
          'core' => '7.x',
          'configure' => 'admin/structure/domain/settings',
          'files' => 
          array (
            0 => 'domain.migrate.inc',
            1 => 'tests/domain.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7312',
        'version' => '7.x-3.16',
      ),
      'drafty_enforce' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/drafty/modules/drafty_enforce/drafty_enforce.module',
        'basename' => 'drafty_enforce.module',
        'name' => 'drafty_enforce',
        'info' => 
        array (
          'name' => 'Drafty Enforce',
          'description' => 'Forces all new revisions to be drafts.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'drafty',
          ),
          'weight' => '-1',
          'files' => 
          array (
            0 => 'DraftyEnforceTestCase.test',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'drafty',
          'datestamp' => '1510238214',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'drafty_1992010' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/drafty/modules/drafty_1992010/drafty_1992010.module',
        'basename' => 'drafty_1992010.module',
        'name' => 'drafty_1992010',
        'info' => 
        array (
          'name' => 'Drafty http://drupal.org/node/1992010',
          'description' => 'Works around a core bug related to field translations via Entity Translation, see http://drupal.org/node/1992010 for full details.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'drafty',
            1 => 'entity_translation',
          ),
          'weight' => '-50',
          'test_dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'files' => 
          array (
            0 => 'Drafty1992010Test.test',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'drafty',
          'datestamp' => '1510238214',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'drafty' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/drafty/drafty.module',
        'basename' => 'drafty.module',
        'name' => 'drafty',
        'info' => 
        array (
          'name' => 'Drafty',
          'description' => 'Facilitates handling of draft revisions, aka forward revisions.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'configure' => 'admin/config/system/drafty',
          'files' => 
          array (
            0 => 'tests/DraftyWebTestCase.test',
            1 => 'tests/DraftyTestCase.test',
            2 => 'tests/DraftyEntityTranslationTest.test',
            3 => 'tests/DraftyFieldCollectionTest.test',
            4 => 'tests/DraftyTitleTestCase.test',
            5 => 'tests/DraftyWorkbenchModerationTests.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'entity_translation',
            1 => 'field_collection',
            2 => 'title',
            3 => 'workbench',
            4 => 'workbench_moderation',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'drafty',
          'datestamp' => '1510238214',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.5',
          'project' => 'google_analytics',
          'datestamp' => '1531469026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.5',
      ),
      'variable_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_admin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_store' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable_realm' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'context_session' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context_session/context_session.module',
        'basename' => 'context_session.module',
        'name' => 'context_session',
        'info' => 
        array (
          'name' => 'Context session',
          'description' => 'Exposes session variables to context and expose a context condition.',
          'package' => 'Context',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'files' => 
          array (
            0 => 'context_condition_session.inc',
          ),
          'configure' => 'admin/structure/context/settings/session',
          'version' => '7.x-1.x-dev',
          'project' => 'context_session',
          'datestamp' => '1380567499',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'flexslider_views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flexslider_views_slideshow/flexslider_views_slideshow.module',
        'basename' => 'flexslider_views_slideshow.module',
        'name' => 'flexslider_views_slideshow',
        'info' => 
        array (
          'name' => 'FlexSlider Views Slideshow',
          'description' => 'NOT FUNCTIONAL - Integrate the FlexSlider library with Views Slideshow',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'flexslider',
            1 => 'views_slideshow',
          ),
          'files' => 
          array (
            0 => 'flexslider_views_slideshow.module',
            1 => 'flexslider_views_slideshow.views_slideshow.inc',
            2 => 'theme/flexslider_views_slideshow.theme.inc',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'flexslider_views_slideshow',
          'datestamp' => '1380579618',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.x-dev',
      ),
      'jcarousel' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/jcarousel/jcarousel.module',
        'basename' => 'jcarousel.module',
        'name' => 'jcarousel',
        'info' => 
        array (
          'name' => 'jCarousel',
          'description' => 'Create jQuery-based carousel rotators.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jcarousel.module',
            1 => 'includes/jcarousel.views.inc',
            2 => 'includes/jcarousel_style_plugin.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'jcarousel',
          'datestamp' => '1420460282',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.7',
      ),
      'image_resize_filter' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/image_resize_filter/image_resize_filter.module',
        'basename' => 'image_resize_filter.module',
        'name' => 'image_resize_filter',
        'info' => 
        array (
          'name' => 'Image resize filter',
          'description' => 'Filter to automatically scale images to their height and width dimensions.',
          'core' => '7.x',
          'package' => 'Input filters',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.16',
          'project' => 'image_resize_filter',
          'datestamp' => '1438457958',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.16',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.7',
          'project' => 'token',
          'datestamp' => '1485316088',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.7',
      ),
      'imagecache_coloractions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/coloractions/imagecache_coloractions.module',
        'basename' => 'imagecache_coloractions.module',
        'name' => 'imagecache_coloractions',
        'info' => 
        array (
          'name' => 'Imagecache Color Actions',
          'description' => 'Provides image effects color-shifting, invert colors, brightness, posterize and alpha transparency effects. Also provides a change image format effect.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_coloractions.module',
            1 => 'transparency.inc',
            2 => 'tests/green.imagecache_preset.inc',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'version' => '7.x-1.9',
      ),
      'image_effects_text_test' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text_test/image_effects_text_test.module',
        'basename' => 'image_effects_text_test.module',
        'name' => 'image_effects_text_test',
        'info' => 
        array (
          'name' => 'Image Effects Text test',
          'description' => 'Defines image styles that test the text effect.',
          'core' => '7.x',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'image_effects_text',
            2 => 'imagecache_canvasactions',
            3 => 'system_stream_wrapper',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'image_effects_text' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text.module',
        'basename' => 'image_effects_text.module',
        'name' => 'image_effects_text',
        'info' => 
        array (
          'name' => 'Image Effects Text',
          'description' => 'Provides an image effect to overlay text captions on images.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'imagecache_actions',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_canvasactions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/canvasactions/imagecache_canvasactions.module',
        'basename' => 'imagecache_canvasactions.module',
        'name' => 'imagecache_canvasactions',
        'info' => 
        array (
          'name' => 'Imagecache Canvas Actions',
          'description' => 'Provides image effects for manipulating image canvases: define canvas, image mask, watermark, underlay background image, rounded corners, composite source to image and resize by percent effect. Also provides an aspect switcher (portrait/landscape).',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_autorotate' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/autorotate/imagecache_autorotate.module',
        'basename' => 'imagecache_autorotate.module',
        'name' => 'imagecache_autorotate',
        'info' => 
        array (
          'name' => 'Imagecache Autorotate',
          'description' => 'Provides an image effect to autorotate an image based on EXIF data.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_customactions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/customactions/imagecache_customactions.module',
        'basename' => 'imagecache_customactions.module',
        'name' => 'imagecache_customactions',
        'info' => 
        array (
          'name' => 'Imagecache Custom Actions',
          'description' => 'Provides the custom and subroutine image effects.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.9',
      ),
      'image_styles_admin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/image_styles_admin/image_styles_admin.module',
        'basename' => 'image_styles_admin.module',
        'name' => 'image_styles_admin',
        'info' => 
        array (
          'name' => 'Image styles admin',
          'description' => 'Provides additional administrative functionality to duplicate, export or import image styles.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_testsuite' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/tests/imagecache_testsuite.module',
        'basename' => 'imagecache_testsuite.module',
        'name' => 'imagecache_testsuite',
        'info' => 
        array (
          'name' => 'Imagecache_actions Test Suite',
          'description' => 'Displays a collection of demo image styles.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'system_stream_wrapper',
          ),
          'features' => 
          array (
            'image' => 
            array (
              0 => 'corners_combo',
            ),
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_actions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/imagecache_actions.module',
        'basename' => 'imagecache_actions.module',
        'name' => 'imagecache_actions',
        'info' => 
        array (
          'name' => 'Imagecache Actions',
          'description' => 'Provides utility code for a number of additional image effects that can be found in the sub modules.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.9',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          '# @codingStandardsIgnoreLine
files' => 
          array (
            0 => 'views_ui.module',
          ),
          'files' => 
          array (
            0 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.20',
          'project' => 'views',
          'datestamp' => '1523668093',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.20',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_ctools_dropdown.inc',
            19 => 'handlers/views_handler_field_custom.inc',
            20 => 'handlers/views_handler_field_date.inc',
            21 => 'handlers/views_handler_field_entity.inc',
            22 => 'handlers/views_handler_field_links.inc',
            23 => 'handlers/views_handler_field_markup.inc',
            24 => 'handlers/views_handler_field_math.inc',
            25 => 'handlers/views_handler_field_numeric.inc',
            26 => 'handlers/views_handler_field_prerender_list.inc',
            27 => 'handlers/views_handler_field_time_interval.inc',
            28 => 'handlers/views_handler_field_serialized.inc',
            29 => 'handlers/views_handler_field_machine_name.inc',
            30 => 'handlers/views_handler_field_url.inc',
            31 => 'handlers/views_handler_filter.inc',
            32 => 'handlers/views_handler_filter_boolean_operator.inc',
            33 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            34 => 'handlers/views_handler_filter_combine.inc',
            35 => 'handlers/views_handler_filter_date.inc',
            36 => 'handlers/views_handler_filter_equality.inc',
            37 => 'handlers/views_handler_filter_entity_bundle.inc',
            38 => 'handlers/views_handler_filter_group_by_numeric.inc',
            39 => 'handlers/views_handler_filter_in_operator.inc',
            40 => 'handlers/views_handler_filter_many_to_one.inc',
            41 => 'handlers/views_handler_filter_numeric.inc',
            42 => 'handlers/views_handler_filter_string.inc',
            43 => 'handlers/views_handler_filter_fields_compare.inc',
            44 => 'handlers/views_handler_relationship.inc',
            45 => 'handlers/views_handler_relationship_groupwise_max.inc',
            46 => 'handlers/views_handler_sort.inc',
            47 => 'handlers/views_handler_sort_date.inc',
            48 => 'handlers/views_handler_sort_formula.inc',
            49 => 'handlers/views_handler_sort_group_by_numeric.inc',
            50 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            51 => 'handlers/views_handler_sort_random.inc',
            52 => 'includes/base.inc',
            53 => 'includes/handlers.inc',
            54 => 'includes/plugins.inc',
            55 => 'includes/view.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            57 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            58 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            61 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            62 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            63 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            64 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            65 => 'modules/book/views_plugin_argument_default_book_root.inc',
            66 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            67 => 'modules/comment/views_handler_field_comment.inc',
            68 => 'modules/comment/views_handler_field_comment_depth.inc',
            69 => 'modules/comment/views_handler_field_comment_link.inc',
            70 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            71 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            72 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            73 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            74 => 'modules/comment/views_handler_field_comment_node_link.inc',
            75 => 'modules/comment/views_handler_field_comment_username.inc',
            76 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            77 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            78 => 'modules/comment/views_handler_field_node_comment.inc',
            79 => 'modules/comment/views_handler_field_node_new_comments.inc',
            80 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            81 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            82 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            83 => 'modules/comment/views_handler_filter_node_comment.inc',
            84 => 'modules/comment/views_handler_sort_comment_thread.inc',
            85 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            86 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            87 => 'modules/comment/views_plugin_row_comment_rss.inc',
            88 => 'modules/comment/views_plugin_row_comment_view.inc',
            89 => 'modules/contact/views_handler_field_contact_link.inc',
            90 => 'modules/field/views_handler_field_field.inc',
            91 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            92 => 'modules/field/views_handler_argument_field_list.inc',
            93 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            94 => 'modules/field/views_handler_argument_field_list_string.inc',
            95 => 'modules/field/views_handler_filter_field_list.inc',
            96 => 'modules/filter/views_handler_field_filter_format_name.inc',
            97 => 'modules/locale/views_handler_field_node_language.inc',
            98 => 'modules/locale/views_handler_filter_node_language.inc',
            99 => 'modules/locale/views_handler_argument_locale_group.inc',
            100 => 'modules/locale/views_handler_argument_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_group.inc',
            102 => 'modules/locale/views_handler_field_locale_language.inc',
            103 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            104 => 'modules/locale/views_handler_filter_locale_group.inc',
            105 => 'modules/locale/views_handler_filter_locale_language.inc',
            106 => 'modules/locale/views_handler_filter_locale_version.inc',
            107 => 'modules/locale/views_handler_sort_node_language.inc',
            108 => 'modules/node/views_handler_argument_dates_various.inc',
            109 => 'modules/node/views_handler_argument_node_language.inc',
            110 => 'modules/node/views_handler_argument_node_nid.inc',
            111 => 'modules/node/views_handler_argument_node_type.inc',
            112 => 'modules/node/views_handler_argument_node_vid.inc',
            113 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            114 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            115 => 'modules/node/views_handler_field_node.inc',
            116 => 'modules/node/views_handler_field_node_link.inc',
            117 => 'modules/node/views_handler_field_node_link_delete.inc',
            118 => 'modules/node/views_handler_field_node_link_edit.inc',
            119 => 'modules/node/views_handler_field_node_revision.inc',
            120 => 'modules/node/views_handler_field_node_revision_link.inc',
            121 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            122 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            123 => 'modules/node/views_handler_field_node_path.inc',
            124 => 'modules/node/views_handler_field_node_type.inc',
            125 => 'modules/node/views_handler_field_node_version_count.inc',
            126 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            127 => 'modules/node/views_handler_filter_node_access.inc',
            128 => 'modules/node/views_handler_filter_node_status.inc',
            129 => 'modules/node/views_handler_filter_node_type.inc',
            130 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            131 => 'modules/node/views_handler_filter_node_version_count.inc',
            132 => 'modules/node/views_handler_sort_node_version_count.inc',
            133 => 'modules/node/views_plugin_argument_default_node.inc',
            134 => 'modules/node/views_plugin_argument_validate_node.inc',
            135 => 'modules/node/views_plugin_row_node_rss.inc',
            136 => 'modules/node/views_plugin_row_node_view.inc',
            137 => 'modules/profile/views_handler_field_profile_date.inc',
            138 => 'modules/profile/views_handler_field_profile_list.inc',
            139 => 'modules/profile/views_handler_filter_profile_selection.inc',
            140 => 'modules/search/views_handler_argument_search.inc',
            141 => 'modules/search/views_handler_field_search_score.inc',
            142 => 'modules/search/views_handler_filter_search.inc',
            143 => 'modules/search/views_handler_sort_search_score.inc',
            144 => 'modules/search/views_plugin_row_search_view.inc',
            145 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            146 => 'modules/statistics/views_handler_field_node_counter_timestamp.inc',
            147 => 'modules/statistics/views_handler_field_statistics_numeric.inc',
            148 => 'modules/system/views_handler_argument_file_fid.inc',
            149 => 'modules/system/views_handler_field_file.inc',
            150 => 'modules/system/views_handler_field_file_extension.inc',
            151 => 'modules/system/views_handler_field_file_filemime.inc',
            152 => 'modules/system/views_handler_field_file_uri.inc',
            153 => 'modules/system/views_handler_field_file_status.inc',
            154 => 'modules/system/views_handler_filter_file_status.inc',
            155 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            156 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_join.inc',
            159 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            160 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            161 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            162 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            163 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            164 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            165 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            166 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            167 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth_join.inc',
            168 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            169 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            170 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            171 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            172 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            173 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            174 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            175 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            176 => 'modules/system/views_handler_filter_system_type.inc',
            177 => 'modules/translation/views_handler_argument_node_tnid.inc',
            178 => 'modules/translation/views_handler_field_node_link_translate.inc',
            179 => 'modules/translation/views_handler_field_node_translation_link.inc',
            180 => 'modules/translation/views_handler_filter_node_tnid.inc',
            181 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            182 => 'modules/translation/views_handler_relationship_translation.inc',
            183 => 'modules/user/views_handler_argument_user_uid.inc',
            184 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            185 => 'modules/user/views_handler_field_user.inc',
            186 => 'modules/user/views_handler_field_user_language.inc',
            187 => 'modules/user/views_handler_field_user_link.inc',
            188 => 'modules/user/views_handler_field_user_link_cancel.inc',
            189 => 'modules/user/views_handler_field_user_link_edit.inc',
            190 => 'modules/user/views_handler_field_user_mail.inc',
            191 => 'modules/user/views_handler_field_user_name.inc',
            192 => 'modules/user/views_handler_field_user_permissions.inc',
            193 => 'modules/user/views_handler_field_user_picture.inc',
            194 => 'modules/user/views_handler_field_user_roles.inc',
            195 => 'modules/user/views_handler_filter_user_current.inc',
            196 => 'modules/user/views_handler_filter_user_name.inc',
            197 => 'modules/user/views_handler_filter_user_permissions.inc',
            198 => 'modules/user/views_handler_filter_user_roles.inc',
            199 => 'modules/user/views_plugin_argument_default_current_user.inc',
            200 => 'modules/user/views_plugin_argument_default_user.inc',
            201 => 'modules/user/views_plugin_argument_validate_user.inc',
            202 => 'modules/user/views_plugin_row_user_view.inc',
            203 => 'plugins/views_plugin_access.inc',
            204 => 'plugins/views_plugin_access_none.inc',
            205 => 'plugins/views_plugin_access_perm.inc',
            206 => 'plugins/views_plugin_access_role.inc',
            207 => 'plugins/views_plugin_argument_default.inc',
            208 => 'plugins/views_plugin_argument_default_php.inc',
            209 => 'plugins/views_plugin_argument_default_fixed.inc',
            210 => 'plugins/views_plugin_argument_default_raw.inc',
            211 => 'plugins/views_plugin_argument_validate.inc',
            212 => 'plugins/views_plugin_argument_validate_numeric.inc',
            213 => 'plugins/views_plugin_argument_validate_php.inc',
            214 => 'plugins/views_plugin_cache.inc',
            215 => 'plugins/views_plugin_cache_none.inc',
            216 => 'plugins/views_plugin_cache_time.inc',
            217 => 'plugins/views_plugin_display.inc',
            218 => 'plugins/views_plugin_display_attachment.inc',
            219 => 'plugins/views_plugin_display_block.inc',
            220 => 'plugins/views_plugin_display_default.inc',
            221 => 'plugins/views_plugin_display_embed.inc',
            222 => 'plugins/views_plugin_display_extender.inc',
            223 => 'plugins/views_plugin_display_feed.inc',
            224 => 'plugins/views_plugin_display_page.inc',
            225 => 'plugins/views_plugin_exposed_form_basic.inc',
            226 => 'plugins/views_plugin_exposed_form.inc',
            227 => 'plugins/views_plugin_exposed_form_input_required.inc',
            228 => 'plugins/views_plugin_localization_core.inc',
            229 => 'plugins/views_plugin_localization.inc',
            230 => 'plugins/views_plugin_localization_none.inc',
            231 => 'plugins/views_plugin_pager.inc',
            232 => 'plugins/views_plugin_pager_full.inc',
            233 => 'plugins/views_plugin_pager_mini.inc',
            234 => 'plugins/views_plugin_pager_none.inc',
            235 => 'plugins/views_plugin_pager_some.inc',
            236 => 'plugins/views_plugin_query.inc',
            237 => 'plugins/views_plugin_query_default.inc',
            238 => 'plugins/views_plugin_row.inc',
            239 => 'plugins/views_plugin_row_fields.inc',
            240 => 'plugins/views_plugin_row_rss_fields.inc',
            241 => 'plugins/views_plugin_style.inc',
            242 => 'plugins/views_plugin_style_default.inc',
            243 => 'plugins/views_plugin_style_grid.inc',
            244 => 'plugins/views_plugin_style_list.inc',
            245 => 'plugins/views_plugin_style_jump_menu.inc',
            246 => 'plugins/views_plugin_style_mapping.inc',
            247 => 'plugins/views_plugin_style_rss.inc',
            248 => 'plugins/views_plugin_style_summary.inc',
            249 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            250 => 'plugins/views_plugin_style_summary_unformatted.inc',
            251 => 'plugins/views_plugin_style_table.inc',
            252 => 'tests/handlers/views_handlers.test',
            253 => 'tests/handlers/views_handler_area_text.test',
            254 => 'tests/handlers/views_handler_argument_null.test',
            255 => 'tests/handlers/views_handler_argument_string.test',
            256 => 'tests/handlers/views_handler_field.test',
            257 => 'tests/handlers/views_handler_field_boolean.test',
            258 => 'tests/handlers/views_handler_field_custom.test',
            259 => 'tests/handlers/views_handler_field_counter.test',
            260 => 'tests/handlers/views_handler_field_date.test',
            261 => 'tests/handlers/views_handler_field_file_extension.test',
            262 => 'tests/handlers/views_handler_field_file_size.test',
            263 => 'tests/handlers/views_handler_field_math.test',
            264 => 'tests/handlers/views_handler_field_url.test',
            265 => 'tests/handlers/views_handler_field_xss.test',
            266 => 'tests/handlers/views_handler_filter_combine.test',
            267 => 'tests/handlers/views_handler_filter_date.test',
            268 => 'tests/handlers/views_handler_filter_equality.test',
            269 => 'tests/handlers/views_handler_filter_in_operator.test',
            270 => 'tests/handlers/views_handler_filter_numeric.test',
            271 => 'tests/handlers/views_handler_filter_string.test',
            272 => 'tests/handlers/views_handler_sort_random.test',
            273 => 'tests/handlers/views_handler_sort_date.test',
            274 => 'tests/handlers/views_handler_sort.test',
            275 => 'tests/test_handlers/views_test_area_access.inc',
            276 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            277 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            278 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            279 => 'tests/plugins/views_plugin_display.test',
            280 => 'tests/styles/views_plugin_style_jump_menu.test',
            281 => 'tests/styles/views_plugin_style.test',
            282 => 'tests/styles/views_plugin_style_base.test',
            283 => 'tests/styles/views_plugin_style_mapping.test',
            284 => 'tests/styles/views_plugin_style_unformatted.test',
            285 => 'tests/views_access.test',
            286 => 'tests/views_analyze.test',
            287 => 'tests/views_basic.test',
            288 => 'tests/views_ajax.test',
            289 => 'tests/views_argument_default.test',
            290 => 'tests/views_argument_validator.test',
            291 => 'tests/views_exposed_form.test',
            292 => 'tests/field/views_fieldapi.test',
            293 => 'tests/views_glossary.test',
            294 => 'tests/views_groupby.test',
            295 => 'tests/views_handlers.test',
            296 => 'tests/views_module.test',
            297 => 'tests/views_pager.test',
            298 => 'tests/views_plugin_localization_test.inc',
            299 => 'tests/views_translatable.test',
            300 => 'tests/views_query.test',
            301 => 'tests/views_upgrade.test',
            302 => 'tests/views_test.views_default.inc',
            303 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            304 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            305 => 'tests/node/views_node_revision_relations.test',
            306 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            307 => 'tests/user/views_handler_field_user_name.test',
            308 => 'tests/user/views_user_argument_default.test',
            309 => 'tests/user/views_user_argument_validate.test',
            310 => 'tests/user/views_user.test',
            311 => 'tests/views_cache.test',
            312 => 'tests/views_view.test',
            313 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.20',
          'project' => 'views',
          'datestamp' => '1523668093',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.20',
      ),
      'bulk_media_upload' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/bulk_media_upload/bulk_media_upload.module',
        'basename' => 'bulk_media_upload.module',
        'name' => 'bulk_media_upload',
        'info' => 
        array (
          'name' => 'Bulk Media Upload',
          'core' => '7.x',
          'package' => 'Media',
          'description' => 'With Bulk Media Upload you can upload a bunch of media files and a new node will be created for every file.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'plupload',
            2 => 'token',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'bulk_media_upload',
          'datestamp' => '1413722029',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions (VBO)',
          'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.5',
          'project' => 'views_bulk_operations',
          'datestamp' => '1525821486',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views (>=3.12)',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2.9',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.5',
          'project' => 'views_bulk_operations',
          'datestamp' => '1525821486',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'parser_ical' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/parser_ical/parser_ical.module',
        'basename' => 'parser_ical.module',
        'name' => 'parser_ical',
        'info' => 
        array (
          'name' => 'iCal parser',
          'description' => 'Provides an iCal parser for Feeds module. Requires PHP 5.3',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'date',
            2 => 'date_api',
            3 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'parser_ical.module',
            1 => 'includes/ParserIcal.inc',
            2 => 'includes/ParserIcalDate.inc',
            3 => 'includes/ParserIcalCreator.inc',
            4 => 'tests/parser_ical.test',
            5 => 'tests/parser_ical_text.test',
            6 => 'tests/parser_ical_link.test',
            7 => 'tests/parser_ical_date.test',
            8 => 'tests/parser_ical_location.test',
            9 => 'tests/parser_ical_categories.test',
          ),
          'core' => '7.x',
          'php' => '5.3',
          'version' => '7.x-2.x-dev',
          'project' => 'parser_ical',
          'datestamp' => '1380622295',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.x-dev',
      ),
      'remote_stream_wrapper' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/remote_stream_wrapper/remote_stream_wrapper.module',
        'basename' => 'remote_stream_wrapper.module',
        'name' => 'remote_stream_wrapper',
        'info' => 
        array (
          'name' => 'Remote stream wrapper',
          'description' => 'Provides the ability to use external files with filefields without saving the files to your local files directory.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'remote_stream_wrapper.inc',
            1 => 'RemoteStreamWrapperMediaBrowser.inc',
            2 => 'remote_stream_wrapper.test',
          ),
          'suggests' => 
          array (
            0 => 'file',
            1 => 'media',
            2 => 'image',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'remote_stream_wrapper',
          'datestamp' => '1398126831',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_user' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_path' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.26',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.26',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_node' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'i18n_string' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.26',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_select' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_block' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields across translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.26',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.26',
      ),
      'i18n_field' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.26',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_object.inc',
            1 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Adds YouTube as a supported media provider.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'test_dependencies' => 
          array (
            0 => 'media_internet (2.x)',
          ),
          'files' => 
          array (
            0 => 'media_youtube.test',
            1 => 'includes/MediaYouTubeStreamWrapper.inc',
            2 => 'includes/MediaInternetYouTubeHandler.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'media_youtube',
          'datestamp' => '1518862084',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-3.7',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0',
      ),
      'ical_aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ical_aggregator/ical_aggregator.module',
        'basename' => 'ical_aggregator.module',
        'name' => 'ical_aggregator',
        'info' => 
        array (
          'name' => 'iCal Aggregator',
          'description' => 'Extends Aggregator to parse iCal.',
          'package' => 'Other',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'aggregator',
          ),
          'files' => 
          array (
            0 => 'ical_aggregator.module',
          ),
          'version' => 'unknown',
          'project' => 'ical_aggregator',
          'datestamp' => '1310051398',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => 'unknown',
      ),
      'commerce_payment_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/payment/modules/commerce_payment_example.module',
        'basename' => 'commerce_payment_example.module',
        'name' => 'commerce_payment_example',
        'info' => 
        array (
          'name' => 'Payment Method Example',
          'description' => 'Provides an example payment method for testing and development.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_payment_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/payment/commerce_payment_ui.module',
        'basename' => 'commerce_payment_ui.module',
        'name' => 'commerce_payment_ui',
        'info' => 
        array (
          'name' => 'Payment UI',
          'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_order',
            3 => 'commerce_order_ui',
            4 => 'commerce_payment',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/payment-methods',
          'files' => 
          array (
            0 => 'tests/commerce_payment_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_payment' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/payment/commerce_payment.module',
        'basename' => 'commerce_payment.module',
        'name' => 'commerce_payment',
        'info' => 
        array (
          'name' => 'Payment',
          'description' => 'Implement core payment features for Drupal commerce.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_order',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment.rules.inc',
            1 => 'includes/commerce_payment_transaction.controller.inc',
            2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
            3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
            4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
            5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
            6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
            7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
            8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
            9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
            10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
            11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
            12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
            13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
            14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
            15 => 'tests/commerce_payment.rules.test',
            16 => 'tests/commerce_payment_credit_card.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.14',
      ),
      'commerce_product' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product/commerce_product.module',
        'basename' => 'commerce_product.module',
        'name' => 'commerce_product',
        'info' => 
        array (
          'name' => 'Product',
          'description' => 'Defines the Product entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_product.controller.inc',
            1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
            3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
            4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
            5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
            6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
            7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
            8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
            9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
            10 => 'includes/commerce_product.translation_handler.inc',
            11 => 'tests/commerce_product.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'version' => '7.x-1.14',
      ),
      'commerce_product_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product/commerce_product_ui.module',
        'basename' => 'commerce_product_ui.module',
        'name' => 'commerce_product_ui',
        'info' => 
        array (
          'name' => 'Product UI',
          'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_product',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/products/types',
          'files' => 
          array (
            0 => 'tests/commerce_product_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.14',
      ),
      'commerce_product_pricing' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing.module',
        'basename' => 'commerce_product_pricing.module',
        'name' => 'commerce_product_pricing',
        'info' => 
        array (
          'name' => 'Product Pricing',
          'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'commerce_product_reference',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.14',
      ),
      'commerce_product_pricing_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
        'basename' => 'commerce_product_pricing_ui.module',
        'name' => 'commerce_product_pricing_ui',
        'info' => 
        array (
          'name' => 'Product Pricing UI',
          'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_price',
            4 => 'commerce_product_pricing',
            5 => 'commerce_product_reference',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/product-pricing',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_product_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product_reference/commerce_product_reference.module',
        'basename' => 'commerce_product_reference.module',
        'name' => 'commerce_product_reference',
        'info' => 
        array (
          'name' => 'Product Reference',
          'description' => 'Defines a product reference field and default display formatters.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product',
            4 => 'entity',
            5 => 'options',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
            1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
            2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
            3 => 'tests/commerce_product_reference.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_tax_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/tax/commerce_tax_ui.module',
        'basename' => 'commerce_tax_ui.module',
        'name' => 'commerce_tax_ui',
        'info' => 
        array (
          'name' => 'Tax UI',
          'description' => 'Provides a UI for creating simple tax types and rates.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_tax',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/taxes',
          'files' => 
          array (
            0 => 'tests/commerce_tax_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.14',
      ),
      'commerce_tax' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/tax/commerce_tax.module',
        'basename' => 'commerce_tax.module',
        'name' => 'commerce_tax',
        'info' => 
        array (
          'name' => 'Tax',
          'description' => 'Define tax rates and configure tax rules for applicability and display.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product_pricing',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_customer_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/customer/commerce_customer_ui.module',
        'basename' => 'commerce_customer_ui.module',
        'name' => 'commerce_customer_ui',
        'info' => 
        array (
          'name' => 'Customer UI',
          'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_customer',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/customer-profiles/types',
          'files' => 
          array (
            0 => 'tests/commerce_customer_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_customer' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/customer/commerce_customer.module',
        'basename' => 'commerce_customer.module',
        'name' => 'commerce_customer',
        'info' => 
        array (
          'name' => 'Customer',
          'description' => 'Defines the Customer entity with Address Field integration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'commerce',
            2 => 'entity',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_customer_profile.controller.inc',
            1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
            3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
            4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
            5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
            6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
            7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.14',
      ),
      'commerce_price' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/price/commerce_price.module',
        'basename' => 'commerce_price.module',
        'name' => 'commerce_price',
        'info' => 
        array (
          'name' => 'Price',
          'description' => 'Defines the price field and a price alteration system.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_price.rules.inc',
            1 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
            2 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.14',
      ),
      'commerce_cart' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/cart/commerce_cart.module',
        'basename' => 'commerce_cart.module',
        'name' => 'commerce_cart',
        'info' => 
        array (
          'name' => 'Cart',
          'description' => 'Implements the shopping cart system and add to cart features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_checkout',
            2 => 'commerce_line_item',
            3 => 'commerce_order',
            4 => 'commerce_product',
            5 => 'commerce_product_pricing',
            6 => 'commerce_product_reference',
            7 => 'entity',
            8 => 'rules',
            9 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
            1 => 'includes/views/handlers/commerce_cart_handler_field_edit_attributes.inc',
            2 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
            3 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
            4 => 'tests/commerce_cart.test',
            5 => 'plugins/cart_provider/interface.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.14',
      ),
      'commerce_order' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/order/commerce_order.module',
        'basename' => 'commerce_order.module',
        'name' => 'commerce_order',
        'info' => 
        array (
          'name' => 'Order',
          'description' => 'Defines the Order entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_customer',
            2 => 'commerce_line_item',
            3 => 'commerce_price',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_order.controller.inc',
            1 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
            3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
            4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
            5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
            6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
            7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
            8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
            9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
            10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
            11 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
            12 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
            13 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
            14 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
            15 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
            16 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
            17 => 'tests/commerce_order.rules.test',
            18 => 'tests/commerce_order.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7110',
        'version' => '7.x-1.14',
      ),
      'commerce_order_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/order/commerce_order_ui.module',
        'basename' => 'commerce_order_ui.module',
        'name' => 'commerce_order_ui',
        'info' => 
        array (
          'name' => 'Order UI',
          'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'commerce_order',
            5 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/order',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
            1 => 'tests/commerce_order_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_line_item_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/line_item/commerce_line_item_ui.module',
        'basename' => 'commerce_line_item_ui.module',
        'name' => 'commerce_line_item_ui',
        'info' => 
        array (
          'name' => 'Line Item UI',
          'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/line-items',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_line_item' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/line_item/commerce_line_item.module',
        'basename' => 'commerce_line_item.module',
        'name' => 'commerce_line_item',
        'info' => 
        array (
          'name' => 'Line Item',
          'description' => 'Defines the Line Item entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_line_item.controller.inc',
            1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
            2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
            3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
            4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
            5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_is_referenced.inc',
            6 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
            7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
            8 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'version' => '7.x-1.14',
      ),
      'commerce_checkout' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/checkout/commerce_checkout.module',
        'basename' => 'commerce_checkout.module',
        'name' => 'commerce_checkout',
        'info' => 
        array (
          'name' => 'Checkout',
          'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_order',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/checkout',
          'files' => 
          array (
            0 => 'tests/commerce_checkout.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.14',
      ),
      'commerce_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/commerce_ui.module',
        'basename' => 'commerce_ui.module',
        'name' => 'commerce_ui',
        'info' => 
        array (
          'name' => 'Commerce UI',
          'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/commerce.module',
        'basename' => 'commerce.module',
        'name' => 'commerce',
        'info' => 
        array (
          'name' => 'Commerce',
          'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'system',
            1 => 'entity',
            2 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_base.test',
            1 => 'includes/commerce.controller.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.14',
      ),
      'domain_menu_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain_menu_access/domain_menu_access.module',
        'basename' => 'domain_menu_access.module',
        'name' => 'domain_menu_access',
        'info' => 
        array (
          'name' => 'Domain Menu Access',
          'description' => 'Allows restricting access to menu items per domain.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'domain_menu_access',
          'datestamp' => '1519215487',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.3',
      ),
      'fontsquirrel' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontsquirrel/fontsquirrel.module',
        'basename' => 'fontsquirrel.module',
        'name' => 'fontsquirrel',
        'info' => 
        array (
          'name' => 'Font Squirrel API',
          'description' => '@font-your-face provider with Font Squirrel fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'google_fonts_api' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/google_fonts_api/google_fonts_api.module',
        'basename' => 'google_fonts_api.module',
        'name' => 'google_fonts_api',
        'info' => 
        array (
          'name' => 'Google Fonts API',
          'description' => '@font-your-face provider with Google fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/google_fonts_api.views_default.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-2.8',
      ),
      'fontyourface_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontyourface_ui/fontyourface_ui.module',
        'basename' => 'fontyourface_ui.module',
        'name' => 'fontyourface_ui',
        'info' => 
        array (
          'name' => '@font-your-face UI',
          'description' => 'Administrative interface for managing fonts.',
          'package' => '@font-your-face',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'views',
          ),
          'configure' => 'admin/config/user-interface/fontyourface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/fontyourface.views_default.inc',
            1 => 'views/views_handler_field_fontyourface_font.inc',
            2 => 'views/views_handler_field_fontyourface_foundry.inc',
            3 => 'views/views_handler_field_fontyourface_license.inc',
            4 => 'views/views_handler_field_fontyourface_provider.inc',
            5 => 'views/views_handler_field_fontyourface_tag_font_tid.inc',
            6 => 'views/views_handler_filter_tag_font_tid.inc',
            7 => 'views/views_handler_relationship_fontyourface_tag.inc',
            8 => 'views/views_handler_field_fontyourface_preview.inc',
            9 => 'views/views_handler_field_fontyourface_enable_disable.inc',
            10 => 'views/views_handler_field_fontyourface_enabled_yes_no.inc',
            11 => 'views/views_handler_filter_fontyourface_provider.inc',
            12 => 'views/views_handler_filter_fontyourface_foundry.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'fonts_com' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fonts_com/fonts_com.module',
        'basename' => 'fonts_com.module',
        'name' => 'fonts_com',
        'info' => 
        array (
          'name' => 'Fonts.com',
          'description' => '@font-your-face provider of fonts from Fonts.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'api.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'font_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/font_reference/font_reference.module',
        'basename' => 'font_reference.module',
        'name' => 'font_reference',
        'info' => 
        array (
          'name' => 'Font Reference',
          'description' => 'Defines a field type for referencing a font from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'field',
            2 => 'options',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'typekit_api' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/typekit_api/typekit_api.module',
        'basename' => 'typekit_api.module',
        'name' => 'typekit_api',
        'info' => 
        array (
          'name' => 'Typekit API',
          'description' => '@font-your-face provider with Typekit.com fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'fontdeck' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontdeck/fontdeck.module',
        'basename' => 'fontdeck.module',
        'name' => 'fontdeck',
        'info' => 
        array (
          'name' => 'Fontdeck',
          'description' => '@font-your-face provider of fonts from Fontdeck.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'fontdeck.install',
            1 => 'fontdeck.module',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'edge_fonts' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/edge_fonts/edge_fonts.module',
        'basename' => 'edge_fonts.module',
        'name' => 'edge_fonts',
        'info' => 
        array (
          'name' => 'Edge Fonts',
          'description' => '@font-your-face provider for Edge Fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'fontyourface_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontyourface_wysiwyg/fontyourface_wysiwyg.module',
        'basename' => 'fontyourface_wysiwyg.module',
        'name' => 'fontyourface_wysiwyg',
        'info' => 
        array (
          'name' => 'WYSIWYG for @font-your-face',
          'description' => 'Adds list of enabled fonts to WYSIWYG.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'wysiwyg',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface_wysiwyg.module',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'local_fonts' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/local_fonts/local_fonts.module',
        'basename' => 'local_fonts.module',
        'name' => 'local_fonts',
        'info' => 
        array (
          'name' => 'Local Fonts',
          'description' => '@font-your-face provider with fonts installed locally on the Drupal server.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.8',
      ),
      'fontyourface' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/fontyourface.module',
        'basename' => 'fontyourface.module',
        'name' => 'fontyourface',
        'info' => 
        array (
          'name' => '@font-your-face',
          'description' => 'Manages web fonts.',
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-2.8',
      ),
      'user_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'references_uuid' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/references_uuid/references_uuid.module',
        'basename' => 'references_uuid.module',
        'name' => 'references_uuid',
        'info' => 
        array (
          'name' => 'References UUID',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'references',
            1 => 'uuid',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'node_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.2',
      ),
      'references' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'workbench_media' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_media/workbench_media.module',
        'basename' => 'workbench_media.module',
        'name' => 'workbench_media',
        'info' => 
        array (
          'name' => 'Workbench Media',
          'description' => 'Media and File features for the Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'workbench',
            1 => 'media',
          ),
          'version' => '7.x-1.1',
          'project' => 'workbench_media',
          'datestamp' => '1346858332',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'filefield_sources' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/filefield_sources/filefield_sources.module',
        'basename' => 'filefield_sources.module',
        'name' => 'filefield_sources',
        'info' => 
        array (
          'name' => 'File Field Sources',
          'description' => 'Extends File fields to allow referencing of existing files, remote files, and server files.',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'system (>=7.36)',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'filefield_sources',
          'datestamp' => '1517969885',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'version' => '7.x-1.11',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.5',
          'project' => 'entityreference',
          'datestamp' => '1502895850',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'test_dependencies' => 
          array (
            0 => 'feeds',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
            11 => 'tests/entityreference.entity_translation.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'entityreference',
          'datestamp' => '1502895850',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.5',
      ),
      'transliteration' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '7.x',
          'configure' => 'admin/config/media/file-system',
          'version' => '7.x-3.2',
          'project' => 'transliteration',
          'datestamp' => '1395079444',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.2',
      ),
      'workbench_files' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_files/workbench_files.module',
        'basename' => 'workbench_files.module',
        'name' => 'workbench_files',
        'info' => 
        array (
          'name' => 'Workbench Files',
          'description' => 'File-related features for the Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'workbench',
          ),
          'version' => '7.x-1.0',
          'project' => 'workbench_files',
          'datestamp' => '1314385328',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0',
      ),
      'draggableviews_book' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/draggableviews/draggableviews_book/draggableviews_book.module',
        'basename' => 'draggableviews_book.module',
        'name' => 'draggableviews_book',
        'info' => 
        array (
          'name' => 'Draggableviews Book',
          'description' => 'Reorder books',
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'draggableviews_book_views_handler_argument.inc',
          ),
          'dependencies' => 
          array (
            0 => 'draggableviews',
            1 => 'book',
          ),
          'version' => '7.x-2.1',
          'project' => 'draggableviews',
          'datestamp' => '1425397028',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.1',
      ),
      'draggableviews' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/draggableviews/draggableviews.module',
        'basename' => 'draggableviews.module',
        'name' => 'draggableviews',
        'info' => 
        array (
          'name' => 'Draggableviews',
          'description' => 'Makes Views draggable',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'handlers/draggableviews_handler.inc',
            1 => 'handlers/draggableviews_hierarchy_handler.inc',
            2 => 'views/draggableviews_handler_field_draggable.inc',
            3 => 'views/draggableviews_handler_sort.inc',
            4 => 'views/draggableviews_join_handler.inc',
            5 => 'test/draggableviews.test',
            6 => 'handlers/draggableviews_handler_native.inc',
            7 => 'handlers/draggableviews_handler_fieldapi.inc',
            8 => 'handlers/draggableviews_hierarchy_handler_native.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'draggableviews',
          'datestamp' => '1425397028',
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.1',
      ),
      'domain_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain_views/domain_views.module',
        'basename' => 'domain_views.module',
        'name' => 'domain_views',
        'info' => 
        array (
          'name' => 'Domain Views',
          'description' => 'Provides Views integration for the Domain Access module.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'domain_views.module',
            1 => 'domain_views.views.inc',
            2 => 'includes/domain_views_handler_argument_domain_access_gid.inc',
            3 => 'includes/domain_views_handler_field_domain_id.inc',
            4 => 'includes/domain_views_handler_field_domain_sitename.inc',
            5 => 'includes/domain_views_handler_field_domain_subdomain.inc',
            6 => 'includes/domain_views_handler_field_domain_access_sitename.inc',
            7 => 'includes/domain_views_handler_filter_domain_access_current_all.inc',
            8 => 'includes/domain_views_handler_filter_domain_access_gid.inc',
            9 => 'includes/domain_views_handler_filter_domain_access_realm.inc',
            10 => 'includes/domain_views_handler_filter_domain_domain_id.inc',
            11 => 'includes/domain_views_handler_filter_domain_machine_name.inc',
            12 => 'includes/domain_views_plugin_access.inc',
            13 => 'includes/domain_views_plugin_argument_default_current.inc',
            14 => 'includes/domain_views_plugin_cache_time.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'domain_views',
          'datestamp' => '1348846266',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'delta_color' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta_color/delta_color.module',
        'basename' => 'delta_color.module',
        'name' => 'delta_color',
        'info' => 
        array (
          'name' => 'Delta Color',
          'description' => 'Makes the color module available for Delta templates.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'dependencies' => 
          array (
            0 => 'delta',
            1 => 'color',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta11',
      ),
      'delta_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta_ui/delta_ui.module',
        'basename' => 'delta_ui.module',
        'name' => 'delta_ui',
        'info' => 
        array (
          'name' => 'Delta UI',
          'description' => 'The Delta UI provides a user interface to build and edit the contextual theme settings provided by the Delta module.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'delta',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta11',
      ),
      'delta_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta_blocks/delta_blocks.module',
        'basename' => 'delta_blocks.module',
        'name' => 'delta_blocks',
        'info' => 
        array (
          'name' => 'Delta Blocks',
          'description' => 'Exposes a number of core Drupal elements as blocks.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'project' => 'delta',
          'datestamp' => '1343161343',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta11',
      ),
      'delta' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta.module',
        'basename' => 'delta.module',
        'name' => 'delta',
        'info' => 
        array (
          'name' => 'Delta API',
          'description' => 'The Delta module is an advanced manipulation of the Theme Settings API to allow for customization/configuration of theme settings based on node types, context, or groups of paths.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-beta11',
      ),
      'scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/scheduler/scheduler.module',
        'basename' => 'scheduler.module',
        'name' => 'scheduler',
        'info' => 
        array (
          'name' => 'Scheduler',
          'description' => 'This module allows nodes to be published and unpublished on specified dates and time.',
          'core' => '7.x',
          'configure' => 'admin/config/content/scheduler',
          'files' => 
          array (
            0 => 'scheduler.install',
            1 => 'scheduler.module',
            2 => 'scheduler.test',
            3 => 'scheduler.views.inc',
            4 => 'scheduler_handler_field_scheduler_countdown.inc',
            5 => 'tests/scheduler_api.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'date',
          ),
          'version' => '7.x-1.5',
          'project' => 'scheduler',
          'datestamp' => '1469372941',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.5',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-2.11',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'version' => '7.x-2.11',
      ),
      'feeds_news' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds_news/feeds_news.module',
        'basename' => 'feeds_news.module',
        'name' => 'feeds_news',
        'info' => 
        array (
          'name' => 'Feeds News',
          'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
          'core' => '7.x',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'feeds',
            3 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'feeds_importer' => 
            array (
              0 => 'feed',
              1 => 'opml',
            ),
            'field_base' => 
            array (
              0 => 'field_feed_item_description',
            ),
            'field_instance' => 
            array (
              0 => 'node-feed_item-field_feed_item_description',
            ),
            'node' => 
            array (
              0 => 'feed',
              1 => 'feed_item',
            ),
            'views_view' => 
            array (
              0 => 'feeds_defaults_feed_items',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_news.module',
            1 => 'feeds_news.test',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta4',
      ),
      'feeds_import' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds_import/feeds_import.module',
        'basename' => 'feeds_import.module',
        'name' => 'feeds_import',
        'info' => 
        array (
          'name' => 'Feeds Import',
          'description' => 'An example of a node importer and a user importer.',
          'core' => '7.x',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'feeds',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'feeds_importer' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_import.test',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta4',
      ),
      'feeds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds_ui/feeds_ui.module',
        'basename' => 'feeds_ui.module',
        'name' => 'feeds_ui',
        'info' => 
        array (
          'name' => 'Feeds Admin UI',
          'description' => 'Administrative UI for Feeds module.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'configure' => 'admin/structure/feeds',
          'files' => 
          array (
            0 => 'feeds_ui.test',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.0-beta4',
      ),
      'feeds' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds.module',
        'basename' => 'feeds.module',
        'name' => 'feeds',
        'info' => 
        array (
          'name' => 'Feeds',
          'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'job_scheduler',
          ),
          'test_dependencies' => 
          array (
            0 => 'date:date',
            1 => 'entity_translation:entity_translation',
            2 => 'feeds_xpathparser:feeds_xpathparser',
            3 => 'i18n:i18n_taxonomy',
            4 => 'link:link',
            5 => 'rules:rules',
            6 => 'variable:variable',
          ),
          'files' => 
          array (
            0 => 'includes/FeedsConfigurable.inc',
            1 => 'includes/FeedsHTTPCache.inc',
            2 => 'includes/FeedsHTTPCacheItem.inc',
            3 => 'includes/FeedsImporter.inc',
            4 => 'includes/FeedsSource.inc',
            5 => 'libraries/ParserCSV.inc',
            6 => 'libraries/http_request.inc',
            7 => 'libraries/PuSHSubscriber.inc',
            8 => 'plugins/FeedsCSVParser.inc',
            9 => 'plugins/FeedsFetcher.inc',
            10 => 'plugins/FeedsFileFetcher.inc',
            11 => 'plugins/FeedsHTTPFetcher.inc',
            12 => 'plugins/FeedsNodeProcessor.inc',
            13 => 'plugins/FeedsOPMLParser.inc',
            14 => 'plugins/FeedsParser.inc',
            15 => 'plugins/FeedsPlugin.inc',
            16 => 'plugins/FeedsProcessor.inc',
            17 => 'plugins/FeedsSimplePieParser.inc',
            18 => 'plugins/FeedsSitemapParser.inc',
            19 => 'plugins/FeedsSyndicationParser.inc',
            20 => 'plugins/FeedsTermProcessor.inc',
            21 => 'plugins/FeedsUserProcessor.inc',
            22 => 'tests/feeds.test',
            23 => 'tests/common_syndication_parser.test',
            24 => 'tests/feeds_content_type.test',
            25 => 'tests/feeds_date_time.test',
            26 => 'tests/feeds_entity.test',
            27 => 'tests/feeds_hooks.test',
            28 => 'tests/feeds_mapper_date.test',
            29 => 'tests/feeds_mapper_date_multiple.test',
            30 => 'tests/feeds_mapper_field.test',
            31 => 'tests/feeds_mapper_file.test',
            32 => 'tests/feeds_mapper_hooks.test',
            33 => 'tests/feeds_mapper_link.test',
            34 => 'tests/feeds_mapper_list.test',
            35 => 'tests/feeds_mapper_multilingual_fields.test',
            36 => 'tests/feeds_mapper_path.test',
            37 => 'tests/feeds_mapper_profile.test',
            38 => 'tests/feeds_mapper_unique.test',
            39 => 'tests/feeds_mapper.test',
            40 => 'tests/feeds_mapper_config.test',
            41 => 'tests/feeds_fetcher_file.test',
            42 => 'tests/feeds_mapper_format_config.test',
            43 => 'tests/feeds_fetcher_http.test',
            44 => 'tests/feeds_i18n.test',
            45 => 'tests/feeds_i18n_node.test',
            46 => 'tests/feeds_i18n_taxonomy.test',
            47 => 'tests/feeds_install.test',
            48 => 'tests/feeds_parser_csv.test',
            49 => 'tests/feeds_parser_sitemap.test',
            50 => 'tests/feeds_parser_syndication.test',
            51 => 'tests/feeds_processor_node.test',
            52 => 'tests/feeds_processor_term.test',
            53 => 'tests/feeds_processor_user.test',
            54 => 'tests/feeds_push.test',
            55 => 'tests/feeds_rules.test',
            56 => 'tests/feeds_scheduler.test',
            57 => 'tests/feeds_mapper_link.test',
            58 => 'tests/feeds_mapper_summary.test',
            59 => 'tests/feeds_mapper_taxonomy.test',
            60 => 'tests/feeds_tokens.test',
            61 => 'tests/FeedsEnclosureTest.test',
            62 => 'tests/FeedsFetcherResultTest.test',
            63 => 'tests/FeedsHTTPCacheTest.test',
            64 => 'tests/FeedsSourceTest.test',
            65 => 'tests/http_request.test',
            66 => 'tests/parser_csv.test',
            67 => 'views/feeds_views_handler_argument_importer_id.inc',
            68 => 'views/feeds_views_handler_field_importer_name.inc',
            69 => 'views/feeds_views_handler_field_log_message.inc',
            70 => 'views/feeds_views_handler_field_severity.inc',
            71 => 'views/feeds_views_handler_field_source.inc',
            72 => 'views/feeds_views_handler_filter_severity.inc',
            73 => 'views/feeds_views_plugin_argument_validate_feed_nid.inc',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'version' => '7.x-2.0-beta4',
      ),
      'varnish' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/varnish/varnish.module',
        'basename' => 'varnish.module',
        'name' => 'varnish',
        'info' => 
        array (
          'name' => 'Varnish',
          'description' => 'Provides integration with the Varnish HTTP accelerator.',
          'core' => '7.x',
          'configure' => 'admin/config/development/varnish',
          'package' => 'Caching',
          'files' => 
          array (
            0 => 'varnish.cache.inc',
            1 => 'varnish.test',
          ),
          'version' => '7.x-1.9',
          'project' => 'varnish',
          'datestamp' => '1532082190',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          '# @codingStandardsIgnoreLine
php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
            1 => 'trigger',
          ),
          'configure' => 'admin/config/system/job_scheduler',
          'version' => '7.x-2.0',
          'project' => 'job_scheduler',
          'datestamp' => '1518514085',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          '# @codingStandardsIgnoreLine
files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
          ),
          'files' => 
          array (
            0 => 'JobScheduler.inc',
            1 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          '# @codingStandardsIgnoreLine
php' => '5.2',
          'version' => '7.x-2.0',
          'project' => 'job_scheduler',
          'datestamp' => '1518514085',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-2.0',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'wysiwyg',
          'datestamp' => '1524085389',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.5',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/LibrariesAdminWebTest.test',
            1 => 'tests/LibrariesLoadWebTest.test',
            2 => 'tests/LibrariesUnitTest.test',
            3 => 'tests/LibrariesWebTestBase.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'libraries',
          'datestamp' => '1538770685',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.5',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
            1 => 'includes/MediaInternetBaseHandler.inc',
            2 => 'includes/MediaInternetFileHandler.inc',
            3 => 'includes/MediaInternetNoHandlerException.inc',
            4 => 'includes/MediaInternetValidationException.inc',
            5 => 'tests/media_internet.test',
          ),
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.21',
      ),
      'media_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_wysiwyg/media_wysiwyg.module',
        'basename' => 'media_wysiwyg.module',
        'name' => 'media_wysiwyg',
        'info' => 
        array (
          'name' => 'Media WYSIWYG',
          'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'test_dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'token',
            2 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'media_wysiwyg.test',
            1 => 'tests/media_wysiwyg.file_usage.test',
            2 => 'tests/media_wysiwyg.macro.test',
            3 => 'tests/media_wysiwyg.paragraph_fix_filter.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7207',
        'version' => '7.x-2.21',
      ),
      'media_bulk_upload' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_bulk_upload/media_bulk_upload.module',
        'basename' => 'media_bulk_upload.module',
        'name' => 'media_bulk_upload',
        'info' => 
        array (
          'name' => 'Media Bulk Upload',
          'description' => 'Adds support for uploading multiple files at a time.',
          'package' => 'Media',
          'core' => '7.x',
          'configure' => 'admin/config/media/browser',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'multiform (>= 7.x-1.3)',
            2 => 'plupload',
          ),
          'test_dependencies' => 
          array (
            0 => 'multiform',
            1 => 'plupload',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserBulkUpload.inc',
            1 => 'tests/media_bulk_upload.test',
          ),
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.21',
      ),
      'mediafield' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.21',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'DEPRECATED, this folder is only here so that the module can be uninstalled.',
          'package' => 'Media',
          'core' => '7.x',
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.21',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7227',
        'version' => '7.x-2.21',
      ),
      'gmap_fields' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_fields/gmap_fields.module',
        'basename' => 'gmap_fields.module',
        'name' => 'gmap_fields',
        'info' => 
        array (
          'name' => 'GMap Fields',
          'description' => 'GMap field types, currently only a marker field.',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'gmap',
            2 => 'options',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'gmap_style_bubbles' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_style_bubbles/gmap_style_bubbles.module',
        'basename' => 'gmap_style_bubbles.module',
        'name' => 'gmap_style_bubbles',
        'info' => 
        array (
          'name' => 'Gmap Style Bubbles',
          'description' => 'A module that lets you add more styles to your gmap popup bubbles.',
          'package' => 'Location',
          'core' => '7.x',
          'project' => 'gmap',
          'dependencies' => 
          array (
            0 => 'gmap',
            1 => 'libraries (2.x)',
          ),
          'version' => '7.x-2.11',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'location_gmap_find_address' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/location_gmap_find_address/location_gmap_find_address.module',
        'basename' => 'location_gmap_find_address.module',
        'name' => 'location_gmap_find_address',
        'info' => 
        array (
          'name' => 'Location + Gmap \'Find Address\' button',
          'description' => 'Adds a \'Find Address\' button to all location fields that use gmap',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'location_cck',
            1 => 'location',
            2 => 'gmap',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'gmap_location' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_location.module',
        'basename' => 'gmap_location.module',
        'name' => 'gmap_location',
        'info' => 
        array (
          'name' => 'GMap Location',
          'description' => 'Display location.module information on Google Maps',
          'package' => 'Location',
          'core' => '7.x',
          'configure' => 'admin/config/services/gmap_location',
          'files' => 
          array (
            0 => 'gmap_location.module',
          ),
          'dependencies' => 
          array (
            0 => 'gmap',
            1 => 'location',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => '5102',
        'version' => '7.x-2.11',
      ),
      'gmap_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_taxonomy.module',
        'basename' => 'gmap_taxonomy.module',
        'name' => 'gmap_taxonomy',
        'info' => 
        array (
          'name' => 'GMap Taxonomy Markers',
          'description' => 'Taxonomy based markers',
          'package' => 'Location',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'gmap',
          ),
          'files' => 
          array (
            0 => 'gmap_taxonomy.module',
            1 => 'gmap_taxonomy.views.inc',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.11',
      ),
      'gmap_macro_builder' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_macro_builder.module',
        'basename' => 'gmap_macro_builder.module',
        'name' => 'gmap_macro_builder',
        'info' => 
        array (
          'name' => 'GMap Macro Builder',
          'description' => 'UI for building GMap macros.',
          'package' => 'Location',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'gmap',
          ),
          'files' => 
          array (
            0 => 'gmap_macro_builder.module',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => '6100',
        'version' => '7.x-2.11',
      ),
      'gmap' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap.module',
        'basename' => 'gmap.module',
        'name' => 'gmap',
        'info' => 
        array (
          'name' => 'GMap',
          'description' => 'Views plugins to show Google Maps from entities.',
          'core' => '7.x',
          'package' => 'Location',
          'configure' => 'admin/config/services/gmap',
          'files' => 
          array (
            0 => 'gmap_plugin_style_gmap.inc',
            1 => 'gmap_plugin_style_gmapextended.inc',
            2 => 'tests/gmap.test',
            3 => 'tests/oopmigration.test',
            4 => 'lib/Drupal/gmap/GmapDefaults.php',
            5 => 'lib/Drupal/gmap/GmapPolylineToolbox.php',
            6 => 'lib/Drupal/gmap/GmapMacroToolbox.php',
            7 => 'tests/inc/gmap_polyutil.inc',
            8 => 'tests/inc/gmap_defaults.inc',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.11',
      ),
      'nice_menus' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/nice_menus/nice_menus.module',
        'basename' => 'nice_menus.module',
        'name' => 'nice_menus',
        'info' => 
        array (
          'name' => 'Nice Menus',
          'description' => 'CSS/jQuery drop-down, drop-right and drop-left menus to be placed in blocks',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/nice_menus',
          'version' => '7.x-2.5',
          'project' => 'nice_menus',
          'datestamp' => '1373943668',
          'php' => '5.2.4',
        ),
        'schema_version' => '6002',
        'version' => '7.x-2.5',
      ),
      'colorbox' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/colorbox/colorbox.module',
        'basename' => 'colorbox.module',
        'name' => 'colorbox',
        'info' => 
        array (
          'name' => 'Colorbox',
          'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
          'dependencies' => 
          array (
            0 => 'libraries (>=2.x)',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/media/colorbox',
          'files' => 
          array (
            0 => 'views/colorbox_handler_field_colorbox.inc',
          ),
          'version' => '7.x-2.13',
          'project' => 'colorbox',
          'datestamp' => '1491291489',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.13',
      ),
      'role_delegation' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/role_delegation/role_delegation.module',
        'basename' => 'role_delegation.module',
        'name' => 'role_delegation',
        'info' => 
        array (
          'name' => 'Role delegation',
          'description' => 'Allows site administrators to grant some roles the authority to assign selected roles to users.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'role_delegation.module',
            1 => 'role_delegation.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'role_delegation',
          'datestamp' => '1308565019',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.module',
            2 => 'module_filter.admin.inc',
            3 => 'module_filter.theme.inc',
            4 => 'css/module_filter.css',
            5 => 'css/module_filter_tab.css',
            6 => 'js/module_filter.js',
            7 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.1',
          'project' => 'module_filter',
          'datestamp' => '1497029349',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.1',
      ),
      'flag_bookmark' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flag/flag_bookmark/flag_bookmark.module',
        'basename' => 'flag_bookmark.module',
        'name' => 'flag_bookmark',
        'info' => 
        array (
          'name' => 'Flag Bookmark',
          'description' => 'Provides an example bookmark flag and supporting views.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'files' => 
          array (
            0 => 'plugins/flag_bookmark_plugin_validate_user.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'flag',
          'datestamp' => '1474619065',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'flag_actions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flag/flag_actions.module',
        'basename' => 'flag_actions.module',
        'name' => 'flag_actions',
        'info' => 
        array (
          'name' => 'Flag actions',
          'description' => 'Execute actions on Flag events.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'configure' => 'admin/structure/flags/actions',
          'version' => '7.x-3.9',
          'project' => 'flag',
          'datestamp' => '1474619065',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'version' => '7.x-3.9',
      ),
      'flag' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flag/flag.module',
        'basename' => 'flag.module',
        'name' => 'flag',
        'info' => 
        array (
          'name' => 'Flag',
          'description' => 'Create customized flags that users can set on entities.',
          'core' => '7.x',
          'package' => 'Flags',
          'configure' => 'admin/structure/flags',
          'test_dependencies' => 
          array (
            0 => 'token',
            1 => 'rules',
          ),
          'files' => 
          array (
            0 => 'includes/flag/flag_flag.inc',
            1 => 'includes/flag/flag_entity.inc',
            2 => 'includes/flag/flag_node.inc',
            3 => 'includes/flag/flag_comment.inc',
            4 => 'includes/flag/flag_user.inc',
            5 => 'includes/flag.cookie_storage.inc',
            6 => 'includes/flag.entity.inc',
            7 => 'flag.rules.inc',
            8 => 'includes/views/flag_handler_argument_entity_id.inc',
            9 => 'includes/views/flag_handler_field_ops.inc',
            10 => 'includes/views/flag_handler_field_flagged.inc',
            11 => 'includes/views/flag_handler_filter_flagged.inc',
            12 => 'includes/views/flag_handler_sort_flagged.inc',
            13 => 'includes/views/flag_handler_relationships.inc',
            14 => 'includes/views/flag_plugin_argument_validate_flaggability.inc',
            15 => 'tests/flag.test',
          ),
          'version' => '7.x-3.9',
          'project' => 'flag',
          'datestamp' => '1474619065',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7306',
        'version' => '7.x-3.9',
      ),
      'workbench_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_access/workbench_access.module',
        'basename' => 'workbench_access.module',
        'name' => 'workbench_access',
        'info' => 
        array (
          'name' => 'Workbench Access',
          'description' => 'Extensible editorial access for the Workbench suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'configure' => 'admin/config/workbench/access',
          'files' => 
          array (
            0 => 'includes/workbench_access_handler_field_edit_node.inc',
            1 => 'includes/workbench_access_handler_field_section.inc',
            2 => 'includes/workbench_access_handler_filter_access.inc',
            3 => 'includes/workbench_access_handler_sort_section.inc',
            4 => 'modules/taxonomy.workbench_access.inc',
            5 => 'modules/menu.workbench_access.inc',
            6 => 'tests/workbench_access.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'workbench_access',
          'datestamp' => '1485026290',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.5',
      ),
      'date_ical' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date_ical/date_ical.module',
        'basename' => 'date_ical.module',
        'name' => 'date_ical',
        'info' => 
        array (
          'name' => 'Date iCal',
          'description' => 'Enables export of iCal feeds using Views, and import of iCal feeds using Feeds.',
          'package' => 'Date/Time',
          'php' => '5.3',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views (>=7.x-3.5)',
            1 => 'date_views',
            2 => 'entity',
            3 => 'libraries (>=7.x-2.0)',
            4 => 'date',
            5 => 'date_api',
          ),
          'files' => 
          array (
            0 => 'includes/date_ical_plugin_row_ical_entity.inc',
            1 => 'includes/date_ical_plugin_row_ical_fields.inc',
            2 => 'includes/date_ical_plugin_style_ical_feed.inc',
            3 => 'includes/DateiCalFeedsParser.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'date_ical',
          'datestamp' => '1461609737',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.9',
      ),
      'noggin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/noggin/noggin.module',
        'basename' => 'noggin.module',
        'name' => 'noggin',
        'info' => 
        array (
          'name' => 'Noggin',
          'description' => 'Allows site builders to easily change the header image for themes.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'noggin.module',
            1 => 'noggin.install',
          ),
          'version' => '7.x-1.1',
          'project' => 'noggin',
          'datestamp' => '1345723644',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.1',
      ),
      'advertisement_banners' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/advertisement_banner/advertisement_banners.module',
        'basename' => 'advertisement_banners.module',
        'name' => 'advertisement_banners',
        'info' => 
        array (
          'name' => 'Advertisement Banners',
          'description' => 'Installs Banner Content Type, Sidebar Top and Sidebar Bottom Banner Blocks',
          'core' => '7.x',
          'package' => 'MCN Base Features',
          'version' => '7.x-1.4',
          'project' => 'advertisement_banners',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'ctools',
            2 => 'features',
            3 => 'field_group',
            4 => 'image',
            5 => 'link',
            6 => 'list',
            7 => 'mcn_base_feature',
            8 => 'media',
            9 => 'node',
            10 => 'options',
            11 => 'strongarm',
            12 => 'taxonomy',
            13 => 'views',
          ),
          'features' => 
          array (
            'context' => 
            array (
              0 => 'banner_blocks',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'field_group:field_group:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_banner_image',
              1 => 'field_banner_link',
              2 => 'field_banner_space',
              3 => 'field_target',
            ),
            'field_group' => 
            array (
              0 => 'group_banner_link|node|banner|form',
            ),
            'field_instance' => 
            array (
              0 => 'node-banner-field_banner_image',
              1 => 'node-banner-field_banner_link',
              2 => 'node-banner-field_banner_space',
              3 => 'node-banner-field_target',
            ),
            'node' => 
            array (
              0 => 'banner',
            ),
            'taxonomy' => 
            array (
              0 => 'banner_space',
            ),
            'user_permission' => 
            array (
              0 => 'create banner content',
              1 => 'delete any banner content',
              2 => 'delete own banner content',
              3 => 'edit any banner content',
              4 => 'edit own banner content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_banner',
              1 => 'comment_banner',
              2 => 'comment_default_mode_banner',
              3 => 'comment_default_per_page_banner',
              4 => 'comment_form_location_banner',
              5 => 'comment_preview_banner',
              6 => 'comment_subject_field_banner',
              7 => 'menu_options_banner',
              8 => 'menu_parent_banner',
              9 => 'node_options_banner',
              10 => 'node_preview_banner',
              11 => 'node_submitted_banner',
              12 => 'scheduler_publish_enable_banner',
              13 => 'scheduler_publish_touch_banner',
              14 => 'scheduler_unpublish_enable_banner',
            ),
            'views_view' => 
            array (
              0 => 'banners',
            ),
          ),
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.4',
      ),
    ),
    'themes' => 
    array (
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
        ),
        'version' => '7.62',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
        ),
        'version' => '7.62',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
        ),
        'version' => '7.62',
      ),
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.62',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
        ),
        'version' => '7.62',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.62',
        'description' => 'This platform is running Drupal 7.62',
      ),
    ),
    'profiles' => 
    array (
      'scout_profile' => 
      array (
        'name' => 'scout_profile',
        'info' => 
        array (
          'name' => 'Scout Profile',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'scout_profile.install',
            1 => 'scout_profile.make',
            2 => 'scout_profile.profile',
          ),
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'contextual',
            2 => 'dblog',
            3 => 'field_ui',
            4 => 'file',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'overlay',
            12 => 'path',
            13 => 'rdf',
            14 => 'shortcut',
            15 => 'taxonomy',
            16 => 'toolbar',
            17 => 'ctools',
            18 => 'features',
            19 => 'module_filter',
            20 => 'strongarm',
            21 => 'basic_page',
            22 => 'mcn_base_feature',
            23 => 'mcn_wysiwyg',
          ),
          'variables' => 
          array (
            'admin_theme' => 'seven',
            'block_cache' => '1',
            'configurable_timezones' => '0',
            'date_default_timezone' => 'America/Chicago',
            'date_first_day' => '0',
            'error_level' => '0',
            'node_admin_theme' => '1',
            'page_compression' => '0',
            'pathauto_node_pattern' => '[node:title]',
            'site_default_country' => 'US',
            'site_mail' => 'noreply@mcninteractive.com',
            'update_check_frequency' => '7',
            'update_notification_threshold' => 'security',
            'update_notify_emails' => 
            array (
              0 => 'sysadmin@mcninteractive.com',
            ),
          ),
          'users' => 
          array (
            'chris' => 
            array (
              'uid' => '2',
              'name' => 'chris',
              'mail' => 'christopher.smith@mcninteractive.com',
              'roles' => 'administrator',
              'status' => '1',
            ),
            'mike' => 
            array (
              'uid' => '3',
              'name' => 'mike',
              'mail' => 'mike.mclean@mcninteractive.com',
              'roles' => 'developer,administrator',
              'status' => '1',
            ),
            'stephen' => 
            array (
              'uid' => '5',
              'name' => 'stephen',
              'mail' => 'stephen.smith@mcninteractive.com',
              'roles' => 'developer',
              'status' => '1',
            ),
            'lang' => 
            array (
              'uid' => '9',
              'name' => 'lang',
              'mail' => 'lang@mcninteractive.com',
              'roles' => 'account manager',
              'status' => '1',
            ),
            'chad' => 
            array (
              'uid' => '12',
              'name' => 'chad',
              'mail' => 'chad.wright@mcninteractive.com',
              'roles' => 'developer',
              'status' => '1',
            ),
            'intern' => 
            array (
              'uid' => '13',
              'name' => 'intern',
              'mail' => 'intern@mcninteractive.com',
              'roles' => 'client',
              'status' => '1',
            ),
          ),
          'nodes' => 
          array (
            'front' => 
            array (
              'type' => 'page',
              'title' => 'Home',
              'uid' => '1',
            ),
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => './profiles/scout_profile/scout_profile.info',
        'version' => '7.62',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'filename' => './profiles/standard/standard.info',
        'version' => '7.62',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.62',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1547663597',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'filename' => './profiles/minimal/minimal.info',
        'version' => '7.62',
      ),
    ),
  ),
  'sites-all' => 
  array (
    'modules' => 
    array (
      'mcn_circleten' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/custom/mcn_circleten/mcn_circleten.module',
        'basename' => 'mcn_circleten.module',
        'name' => 'mcn_circleten',
        'info' => 
        array (
          'name' => 'MCN Circle10 glue',
          'description' => 'Modifcations for Circle10',
          'core' => '7.x',
          'package' => 'MCN',
          'files' => 
          array (
            0 => 'mcn_circleten.module',
          ),
          'dependencies' => 
          array (
          ),
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'basic_page' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/basic_page/basic_page.module',
        'basename' => 'basic_page.module',
        'name' => 'basic_page',
        'info' => 
        array (
          'name' => 'Basic Page',
          'description' => 'Adds the Basic Page functionality and permissions',
          'core' => '7.x',
          'package' => 'MCN Features',
          'version' => '7.x-1.1',
          'project' => 'basic_page',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'mcn_base_feature',
            2 => 'mcn_wysiwyg',
            3 => 'node',
            4 => 'strongarm',
            5 => 'text',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
            ),
            'field_instance' => 
            array (
              0 => 'node-page-body',
            ),
            'node' => 
            array (
              0 => 'page',
            ),
            'user_permission' => 
            array (
              0 => 'create page content',
              1 => 'delete any page content',
              2 => 'delete own page content',
              3 => 'edit any page content',
              4 => 'edit own page content',
            ),
            'variable' => 
            array (
              0 => 'comment_page',
              1 => 'node_options_page',
              2 => 'node_submitted_page',
            ),
          ),
          'project path' => '/tmp',
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'mcn_base_feature' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/mcn_base_feature/mcn_base_feature.module',
        'basename' => 'mcn_base_feature.module',
        'name' => 'mcn_base_feature',
        'info' => 
        array (
          'name' => 'MCN Base Feature',
          'description' => 'Provides base tools for content editing and site administration.  Required by all features.',
          'core' => '7.x',
          'package' => 'MCN Features',
          'version' => '7.x-2.0',
          'project' => 'mcn_base_feature',
          'dependencies' => 
          array (
            0 => 'admin_menu',
            1 => 'admin_menu_toolbar',
            2 => 'admin_views',
            3 => 'block',
            4 => 'bulk_media_upload',
            5 => 'colorbox',
            6 => 'context',
            7 => 'context_ui',
            8 => 'contextual',
            9 => 'ctools',
            10 => 'features',
            11 => 'field_group',
            12 => 'file_entity',
            13 => 'googleanalytics',
            14 => 'image',
            15 => 'libraries',
            16 => 'link',
            17 => 'media',
            18 => 'mediafield',
            19 => 'menu',
            20 => 'node',
            21 => 'node_reference',
            22 => 'overlay',
            23 => 'path',
            24 => 'pathauto',
            25 => 'plupload',
            26 => 'references',
            27 => 'scheduler',
            28 => 'shortcut',
            29 => 'strongarm',
            30 => 'system',
            31 => 'taxonomy',
            32 => 'token',
            33 => 'toolbar',
            34 => 'transliteration',
            35 => 'user',
            36 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'taxonomy' => 
            array (
              0 => 'tags',
            ),
            'user_permission' => 
            array (
              0 => 'access administration menu',
              1 => 'access administration pages',
              2 => 'access content',
              3 => 'access content overview',
              4 => 'access contextual links',
              5 => 'access overlay',
              6 => 'access site in maintenance mode',
              7 => 'access site reports',
              8 => 'access toolbar',
              9 => 'access user profiles',
              10 => 'administer actions',
              11 => 'administer blocks',
              12 => 'administer content types',
              13 => 'administer features',
              14 => 'administer fieldgroups',
              15 => 'administer files',
              16 => 'administer google analytics',
              17 => 'administer image styles',
              18 => 'administer menu',
              19 => 'administer modules',
              20 => 'administer nodes',
              21 => 'administer pathauto',
              22 => 'administer permissions',
              23 => 'administer scheduler',
              24 => 'administer shortcuts',
              25 => 'administer site configuration',
              26 => 'administer taxonomy',
              27 => 'administer themes',
              28 => 'administer url aliases',
              29 => 'administer users',
              30 => 'block IP addresses',
              31 => 'bulk upload media',
              32 => 'bypass node access',
              33 => 'cancel account',
              34 => 'change own username',
              35 => 'create files',
              36 => 'create url aliases',
              37 => 'customize shortcut links',
              38 => 'delete terms in tags',
              39 => 'display drupal links',
              40 => 'edit terms in tags',
              41 => 'flush caches',
              42 => 'manage features',
              43 => 'notify of path changes',
              44 => 'opt-in or out of tracking',
              45 => 'schedule (un)publishing of nodes',
              46 => 'select account cancellation method',
              47 => 'switch shortcut sets',
              48 => 'use PHP for tracking visibility',
              49 => 'view own unpublished content',
              50 => 'view the administration theme',
            ),
            'user_role' => 
            array (
              0 => 'account manager',
              1 => 'administrator',
              2 => 'client',
              3 => 'developer',
            ),
            'variable' => 
            array (
              0 => 'configurable_timezones',
              1 => 'image_jpeg_quality',
              2 => 'image_toolkit',
              3 => 'pathauto_node_pattern',
              4 => 'site_frontpage',
              5 => 'user_register',
            ),
          ),
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'mcn_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/mcn_wysiwyg/mcn_wysiwyg.module',
        'basename' => 'mcn_wysiwyg.module',
        'name' => 'mcn_wysiwyg',
        'info' => 
        array (
          'name' => 'MCN wysiwyg',
          'description' => 'wysiwyg configuration',
          'core' => '7.x',
          'package' => 'MCN Features',
          'version' => '7.x-2.0',
          'project' => 'mcn_wysiwyg',
          'dependencies' => 
          array (
            0 => 'better_formats',
            1 => 'ckeditor_link',
            2 => 'ctools',
            3 => 'features',
            4 => 'filter',
            5 => 'image_resize_filter',
            6 => 'mcn_base_feature',
            7 => 'media',
            8 => 'media_wysiwyg',
            9 => 'strongarm',
            10 => 'wysiwyg',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'filter' => 
            array (
              0 => 'full_html',
            ),
            'user_permission' => 
            array (
              0 => 'access ckeditor link',
              1 => 'access media browser',
              2 => 'administer ckeditor link',
              3 => 'administer filters',
              4 => 'administer media browser',
              5 => 'show format selection for file',
              6 => 'show format selection for node',
              7 => 'show format selection for taxonomy_term',
              8 => 'show format selection for user',
              9 => 'show format tips',
              10 => 'show more format tips link',
              11 => 'use text format full_html',
            ),
            'variable' => 
            array (
              0 => 'better_formats_per_field_core',
              1 => 'ckeditor_link_type_selected',
              2 => 'filter_fallback_format',
            ),
            'wysiwyg' => 
            array (
              0 => 'full_html',
            ),
          ),
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'fpa' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fpa/fpa.module',
        'basename' => 'fpa.module',
        'name' => 'fpa',
        'info' => 
        array (
          'name' => 'Fast Permissions Administration',
          'description' => 'Fast filtering on permissions administration form.',
          'core' => '7.x',
          'package' => 'Administration',
          'version' => '7.x-2.6',
          'project' => 'fpa',
          'datestamp' => '1408744435',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.6',
      ),
      'addressfield' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'addressfield.migrate.inc',
            1 => 'views/addressfield_views_handler_field_administrative_area.inc',
            2 => 'views/addressfield_views_handler_field_country.inc',
            3 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'addressfield',
          'datestamp' => '1540579391',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.3',
      ),
      'resp_img' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/resp_img/resp_img.module',
        'basename' => 'resp_img.module',
        'name' => 'resp_img',
        'info' => 
        array (
          'name' => 'Responsive images and styles',
          'description' => 'Responsive images and styles',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'resp_img.module',
            1 => 'cache.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'resp_img',
          'datestamp' => '1340805730',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.3',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'features',
            4 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.10',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_context' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7001',
        'version' => '7.x-2.10',
      ),
      'date_all_day' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'date_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views.inc',
            5 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.10',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'tests/date_api.test',
            2 => 'tests/date.test',
            3 => 'tests/date_field.test',
            4 => 'tests/date_migrate.test',
            5 => 'tests/date_validation.test',
            6 => 'tests/date_timezone.test',
            7 => 'tests/date_views_pager.test',
            8 => 'tests/date_views_popup.test',
            9 => 'tests/date_form.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'date',
          'datestamp' => '1491562090',
        ),
        'schema_version' => '7005',
        'version' => '7.x-2.10',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.9',
          'project' => 'entity',
          'datestamp' => '1518620551',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.9',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.9',
          'project' => 'entity',
          'datestamp' => '1518620551',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'og_context' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_context/og_context.module',
        'basename' => 'og_context.module',
        'name' => 'og_context',
        'info' => 
        array (
          'name' => 'Organic groups context',
          'description' => 'Get a group from a viewed page.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/og_context_plugin_argument_default_group_context.inc',
            1 => 'includes/views/handlers/og_context_plugin_access_og_perm.inc',
            2 => 'og_context.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_ui/og_ui.module',
        'basename' => 'og_ui.module',
        'name' => 'og_ui',
        'info' => 
        array (
          'name' => 'Organic groups UI',
          'description' => 'Organic groups UI.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
            1 => 'views_bulk_operations',
          ),
          'core' => '7.x',
          'version' => '7.x-2.10',
          'files' => 
          array (
            0 => 'og_ui.test',
            1 => 'includes/views/handlers/og_ui_handler_area_og_membership_overview.inc',
            2 => 'includes/migrate/7000/add_field.inc',
            3 => 'includes/migrate/7000/populate_field.inc',
            4 => 'includes/migrate/7000/set_roles.inc',
          ),
          'configure' => 'admin/config/group',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.10',
      ),
      'og_field_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_field_access/og_field_access.module',
        'basename' => 'og_field_access.module',
        'name' => 'og_field_access',
        'info' => 
        array (
          'name' => 'Organic groups field access',
          'description' => 'Provide field access based on group.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og_field_access.test',
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_access/og_access.module',
        'basename' => 'og_access.module',
        'name' => 'og_access',
        'info' => 
        array (
          'name' => 'Organic groups access control',
          'description' => 'Enable access control for private and public groups and group content.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'version' => '7.x-2.10',
          'files' => 
          array (
            0 => 'og_access.test',
          ),
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.10',
      ),
      'og_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_example/og_example.module',
        'basename' => 'og_example.module',
        'name' => 'og_example',
        'info' => 
        array (
          'name' => 'OG example',
          'description' => 'Example module to show Organic groups configuration that can be used as building block.',
          'core' => '7.x',
          'package' => 'Features',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'entityreference_prepopulate',
            2 => 'features',
            3 => 'list',
            4 => 'message_notify',
            5 => 'og',
            6 => 'og_ui',
            7 => 'page_manager',
            8 => 'panels',
            9 => 'rules',
            10 => 'views_content',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'page_manager:pages_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'body',
              1 => 'field_node_reference',
              2 => 'group_group',
              3 => 'og_group_ref',
            ),
            'field_instance' => 
            array (
              0 => 'message-og_new_content-field_node_reference',
              1 => 'node-group-body',
              2 => 'node-group-group_group',
              3 => 'node-post-body',
              4 => 'node-post-og_group_ref',
            ),
            'message_type' => 
            array (
              0 => 'og_new_content',
            ),
            'node' => 
            array (
              0 => 'group',
              1 => 'post',
            ),
            'page_manager_handlers' => 
            array (
              0 => 'node_view_panel_context',
            ),
            'rules_config' => 
            array (
              0 => 'rules_og_new_content_message',
            ),
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og_register' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og_register/og_register.module',
        'basename' => 'og_register.module',
        'name' => 'og_register',
        'info' => 
        array (
          'name' => 'Organic groups register',
          'description' => 'Allow subscribing to groups during the user registration.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'og',
          ),
          'core' => '7.x',
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.10',
      ),
      'og' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/og/og.module',
        'basename' => 'og.module',
        'name' => 'og',
        'info' => 
        array (
          'name' => 'Organic groups',
          'description' => 'API to allow associating content with groups.',
          'package' => 'Organic groups',
          'dependencies' => 
          array (
            0 => 'options',
            1 => 'list',
            2 => 'text',
            3 => 'entity',
            4 => 'entityreference',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'og.info.inc',
            1 => 'includes/og.admin.inc',
            2 => 'includes/og.exception.inc',
            3 => 'includes/og.membership.inc',
            4 => 'includes/og.membership_type.inc',
            5 => 'includes/views/og.views.inc',
            6 => 'og.test',
            7 => 'includes/views/handlers/og_plugin_argument_validate_group.inc',
            8 => 'includes/views/handlers/og_plugin_argument_default_user_groups.inc',
            9 => 'includes/views/handlers/og_handler_field_group_audience_state.inc',
            10 => 'includes/views/handlers/og_handler_field_prerender_list.inc',
            11 => 'includes/views/handlers/og_handler_field_user_roles.inc',
            12 => 'includes/views/handlers/og_handler_field_group_permissions.inc',
            13 => 'includes/views/handlers/og_handler_field_og_membership_link_edit.inc',
            14 => 'includes/views/handlers/og_handler_field_og_membership_link_delete.inc',
            15 => 'includes/views/handlers/og_handler_filter_group_audience_state.inc',
            16 => 'includes/views/handlers/og_handler_filter_user_roles.inc',
            17 => 'includes/views/handlers/og_handler_relationship.inc',
            18 => 'includes/views/handlers/og_handler_relationship_membership_roles.inc',
            19 => 'includes/migrate/plugins/destinations/og_membership.inc',
            20 => 'includes/migrate/7000/og_add_fields.inc',
            21 => 'includes/migrate/7000/og_content.inc',
            22 => 'includes/migrate/7000/og_group.inc',
            23 => 'includes/migrate/7000/og_user.inc',
            24 => 'includes/migrate/7000/og_ogur_roles.migrate.inc',
            25 => 'includes/migrate/7000/og_ogur.migrate.inc',
            26 => 'includes/migrate/og.migrate.inc',
            27 => 'includes/migrate/7200/og_og_membership.migrate.inc',
            28 => 'includes/migrate/7200/og_roles.migrate.inc',
            29 => 'includes/migrate/7200/og_user_roles.migrate.inc',
          ),
          'version' => '7.x-2.10',
          'project' => 'og',
          'datestamp' => '1530174231',
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.10',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/context_layouts_reaction_block.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'context',
          'datestamp' => '1543594688',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.9',
          'project' => 'context',
          'datestamp' => '1543594688',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'version' => '7.x-3.9',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/context.test',
            1 => 'tests/context.conditions.test',
            2 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.9',
          'project' => 'context',
          'datestamp' => '1543594688',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-3.9',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.migrate.inc',
            1 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.3',
          'project' => 'pathauto',
          'datestamp' => '1444232655',
          'php' => '5.2.4',
        ),
        'schema_version' => '7006',
        'version' => '7.x-1.3',
      ),
      'workbench_moderation' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_moderation/workbench_moderation.module',
        'basename' => 'workbench_moderation.module',
        'name' => 'workbench_moderation',
        'info' => 
        array (
          'name' => 'Workbench Moderation',
          'description' => 'Provides content moderation services',
          'package' => 'Workbench',
          'core' => '7.x',
          'configure' => 'admin/config/workbench/moderation',
          'files' => 
          array (
            0 => 'workbench_moderation.module',
            1 => 'includes/workbench_moderation_handler_field_history_link.inc',
            2 => 'includes/workbench_moderation_handler_field_links.inc',
            3 => 'includes/workbench_moderation_handler_field_state.inc',
            4 => 'includes/workbench_moderation_handler_filter_state.inc',
            5 => 'includes/workbench_moderation_handler_filter_moderated_type.inc',
            6 => 'includes/workbench_moderation_handler_filter_user_can_moderate.inc',
            7 => 'workbench_moderation.migrate.inc',
            8 => 'tests/external_node_update.test',
            9 => 'tests/workbench_moderation.test',
            10 => 'tests/workbench_moderation.files.test',
            11 => 'tests/workbench_moderation.perms.test',
            12 => 'tests/workbench_moderation.node_access.test',
            13 => 'tests/workbench_moderation.transition.test',
          ),
          'dependencies' => 
          array (
            0 => 'drafty',
          ),
          'version' => '7.x-3.0',
          'project' => 'workbench_moderation',
          'datestamp' => '1478119457',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.0',
      ),
      'omega_tools' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/omega_tools/omega_tools.module',
        'basename' => 'omega_tools.module',
        'name' => 'omega_tools',
        'info' => 
        array (
          'name' => 'Omega Tools',
          'description' => 'Provides additional functionality for the <a href="http://drupal.org/project/omega">Omega Theme</a>.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'omega_tools.module',
            1 => 'includes/omega_tools.admin.inc',
            2 => 'includes/omega_tools.drush.inc',
            3 => 'includes/omega_tools.wizard.inc',
          ),
          'version' => '7.x-3.0-rc4',
          'project' => 'omega_tools',
          'datestamp' => '1329502543',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc4',
      ),
      'views_tree' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_tree/views_tree.module',
        'basename' => 'views_tree.module',
        'name' => 'views_tree',
        'info' => 
        array (
          'name' => 'Views Tree',
          'description' => 'A Views style plugin to display a tree of elements using the adjacency model.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_tree_plugin_style_tree.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'views_tree',
          'datestamp' => '1332368746',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup the Drupal database and files or migrate them to another environment.',
          'core' => '7.x',
          'configure' => 'admin/config/system/backup_migrate',
          'php' => '5.4',
          'files' => 
          array (
            0 => 'includes/crud.inc',
            1 => 'includes/destinations.inc',
            2 => 'includes/destinations.browser.inc',
            3 => 'includes/destinations.db.inc',
            4 => 'includes/destinations.db.mysql.inc',
            5 => 'includes/destinations.email.inc',
            6 => 'includes/destinations.file.inc',
            7 => 'includes/destinations.ftp.inc',
            8 => 'includes/destinations.nodesquirrel.inc',
            9 => 'includes/destinations.s3.inc',
            10 => 'includes/files.inc',
            11 => 'includes/filters.inc',
            12 => 'includes/filters.backup_restore.inc',
            13 => 'includes/filters.compression.inc',
            14 => 'includes/filters.encryption.inc',
            15 => 'includes/filters.statusnotify.inc',
            16 => 'includes/filters.utils.inc',
            17 => 'includes/locations.inc',
            18 => 'includes/profiles.inc',
            19 => 'includes/schedules.inc',
            20 => 'includes/sources.inc',
            21 => 'includes/sources.archivesource.inc',
            22 => 'includes/sources.db.inc',
            23 => 'includes/sources.db.mysql.inc',
            24 => 'includes/sources.filesource.inc',
            25 => 'tests/BmTestBase.test',
            26 => 'tests/BmTestBasics.test',
            27 => 'tests/BmTestProfiles.test',
          ),
          'version' => '7.x-3.6',
          'project' => 'backup_migrate',
          'datestamp' => '1544925486',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7307',
        'version' => '7.x-3.6',
      ),
      'diff' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show differences between content revisions.',
          'core' => '7.x',
          'configure' => 'admin/config/content/diff',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-3.4',
          'project' => 'diff',
          'datestamp' => '1541401388',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7307',
        'version' => '7.x-3.4',
      ),
      'location_phone' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_phone/location_phone.module',
        'basename' => 'location_phone.module',
        'name' => 'location_phone',
        'info' => 
        array (
          'name' => 'Location Phone',
          'package' => 'Location',
          'description' => 'Allows you to add a phone number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_phone.views.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'version' => '7.x-3.7',
      ),
      'location_entity' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_entity/location_entity.module',
        'basename' => 'location_entity.module',
        'name' => 'location_entity',
        'info' => 
        array (
          'name' => 'Location Entity',
          'description' => 'Provide information about Location field to Entity module.',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'la' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_autofill/la.module',
        'basename' => 'la.module',
        'name' => 'la',
        'info' => 
        array (
          'name' => 'Location autofill',
          'description' => 'Fill up all locations with lat&lon data',
          'core' => '7.x',
          'package' => 'Location',
          'configure' => 'admin/config/services/la',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_www' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_www/location_www.module',
        'basename' => 'location_www.module',
        'name' => 'location_www',
        'info' => 
        array (
          'name' => 'Location www',
          'package' => 'Location',
          'description' => 'Allows you to add a www adress to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-3.7',
      ),
      'location_addanother' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_addanother/location_addanother.module',
        'basename' => 'location_addanother.module',
        'name' => 'location_addanother',
        'info' => 
        array (
          'name' => 'Location Add Another',
          'description' => 'Allows you to quickly add locations directly from a node without having to click \'edit\' first.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'location_node',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_email' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_email/location_email.module',
        'basename' => 'location_email.module',
        'name' => 'location_email',
        'info' => 
        array (
          'name' => 'Location Email',
          'package' => 'Location',
          'description' => 'Allows you to add an email address to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_email.views.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_fax' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_fax/location_fax.module',
        'basename' => 'location_fax.module',
        'name' => 'location_fax',
        'info' => 
        array (
          'name' => 'Location Fax',
          'package' => 'Location',
          'description' => 'Allows you to add a fax number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_fax.views.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'version' => '7.x-3.7',
      ),
      'location_generate' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_generate/location_generate.module',
        'basename' => 'location_generate.module',
        'name' => 'location_generate',
        'info' => 
        array (
          'name' => 'Location Generate',
          'description' => 'Bulk assign random latitude and longitudes to nodes.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel_generate',
            1 => 'location',
          ),
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_cck' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_cck/location_cck.module',
        'basename' => 'location_cck.module',
        'name' => 'location_cck',
        'info' => 
        array (
          'name' => 'Location CCK',
          'description' => 'Defines a Location field type.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'version' => '7.x-3.7',
      ),
      'location_search' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_search/location_search.module',
        'basename' => 'location_search.module',
        'name' => 'location_search',
        'info' => 
        array (
          'name' => 'Location Search',
          'package' => 'Location',
          'description' => 'Advanced search page for locations.',
          'configure' => 'admin/config/content/location/search',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_search.admin.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => '5300',
        'version' => '7.x-3.7',
      ),
      'location_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/contrib/location_taxonomy/location_taxonomy.module',
        'basename' => 'location_taxonomy.module',
        'name' => 'location_taxonomy',
        'info' => 
        array (
          'name' => 'Location Taxonomy',
          'description' => 'Associate locations with taxonomy terms.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'taxonomy',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_node' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/location_node.module',
        'basename' => 'location_node.module',
        'name' => 'location_node',
        'info' => 
        array (
          'name' => 'Node Locations',
          'description' => 'Associate locations with nodes.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location_user' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/location_user.module',
        'basename' => 'location_user.module',
        'name' => 'location_user',
        'info' => 
        array (
          'name' => 'User Locations',
          'description' => 'Associate locations with users.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'configure' => 'admin/config/people/accounts',
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.7',
      ),
      'location' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/location/location.module',
        'basename' => 'location.module',
        'name' => 'location',
        'info' => 
        array (
          'name' => 'Location',
          'package' => 'Location',
          'description' => 'The location module allows you to associate a geographic location with content and users. Users can do proximity searches by postal code.  This is useful for organizing communities that have a geographic presence.',
          'core' => '7.x',
          'configure' => 'admin/config/content/location',
          'files' => 
          array (
            0 => 'location.admin.inc',
            1 => 'location.georss.inc',
            2 => 'location.inc',
            3 => 'location.token.inc',
            4 => 'location.views.inc',
            5 => 'location.views_default.inc',
            6 => 'location.migrate.inc',
            7 => 'tests/location_testcase.test',
            8 => 'tests/cow.test',
            9 => 'tests/earth.test',
            10 => 'tests/google_geocoder.test',
            11 => 'tests/location_cck.test',
            12 => 'tests/location_cck2.test',
            13 => 'handlers/location_handler_argument_location_country.inc',
            14 => 'handlers/location_handler_argument_location_province.inc',
            15 => 'handlers/location_handler_argument_location_proximity.inc',
            16 => 'handlers/location_handler_field_location_additional.inc',
            17 => 'handlers/location_handler_field_location_address.inc',
            18 => 'handlers/location_handler_field_location_country.inc',
            19 => 'handlers/location_handler_field_location_distance.inc',
            20 => 'handlers/location_handler_field_location_province.inc',
            21 => 'handlers/location_handler_field_location_street.inc',
            22 => 'handlers/location_handler_filter_location_country.inc',
            23 => 'handlers/location_handler_filter_location_province.inc',
            24 => 'handlers/location_handler_sort_location_country.inc',
            25 => 'handlers/location_handler_sort_location_distance.inc',
            26 => 'handlers/location_views_handler_field_coordinates.inc',
            27 => 'handlers/location_views_handler_field_latitude.inc',
            28 => 'handlers/location_views_handler_field_longitude.inc',
            29 => 'handlers/location_views_handler_filter_proximity.inc',
            30 => 'plugins/contexts/location.inc',
            31 => 'plugins/relationships/location_from_node.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'location',
          'datestamp' => '1438695672',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.7',
      ),
      'menu_attributes' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/menu_attributes/menu_attributes.module',
        'basename' => 'menu_attributes.module',
        'name' => 'menu_attributes',
        'info' => 
        array (
          'name' => 'Menu attributes',
          'description' => 'Allows administrators to specify custom attributes for menu items.',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/menu/settings',
          'files' => 
          array (
            0 => 'menu_attributes.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'menu_attributes',
          'datestamp' => '1455568740',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.0',
      ),
      'domaincontext' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domaincontext/domaincontext.module',
        'basename' => 'domaincontext.module',
        'name' => 'domaincontext',
        'info' => 
        array (
          'name' => 'Domain Context',
          'description' => 'Provides a Domain condition plugin for the Context module.',
          'package' => 'Domain Access',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'domain',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'plugins/domaincontext_context_condition_domain.inc',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'domaincontext',
          'datestamp' => '1330573242',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha1',
      ),
      'simplehtmldom' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/simplehtmldom/simplehtmldom.module',
        'basename' => 'simplehtmldom.module',
        'name' => 'simplehtmldom',
        'info' => 
        array (
          'name' => 'simplehtmldom API',
          'description' => 'A bridge between the PHP Simple HTML DOM Parser library and Drupal.',
          'core' => '7.x',
          'version' => '7.x-2.1',
          'project' => 'simplehtmldom',
          'datestamp' => '1395160457',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.1',
      ),
      'remote_file_source' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/remote_file_source/remote_file_source.module',
        'basename' => 'remote_file_source.module',
        'name' => 'remote_file_source',
        'info' => 
        array (
          'name' => 'Remote File Source',
          'description' => 'Provide a way to add external files without transfering the file locally.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'filefield_sources',
            1 => 'remote_stream_wrapper',
          ),
          'version' => '7.x-1.0',
          'project' => 'remote_file_source',
          'datestamp' => '1331310646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0',
      ),
      'term_depth' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/term_depth/term_depth.module',
        'basename' => 'term_depth.module',
        'name' => 'term_depth',
        'info' => 
        array (
          'name' => 'Term Depth access',
          'description' => 'Controls access to context based upon term depth',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'files' => 
          array (
            0 => 'tests/head_links.test',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.14',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/css-cache.inc',
            2 => 'includes/math-expr.inc',
            3 => 'includes/stylizer.inc',
            4 => 'tests/context.test',
            5 => 'tests/css.test',
            6 => 'tests/css_cache.test',
            7 => 'tests/ctools.plugins.test',
            8 => 'tests/ctools.test',
            9 => 'tests/math_expression.test',
            10 => 'tests/math_expression_stack.test',
            11 => 'tests/object_cache.test',
            12 => 'tests/object_cache_unit.test',
            13 => 'tests/page_tokens.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'ctools',
          'datestamp' => '1519455788',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.14',
      ),
      'media_browser_plus' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media_browser_plus/media_browser_plus.module',
        'basename' => 'media_browser_plus.module',
        'name' => 'media_browser_plus',
        'info' => 
        array (
          'name' => 'Media Browser Plus for Media 2.x',
          'description' => 'Provides enhanced UX and additional features for Media.',
          'package' => 'Media',
          'core' => '7.x',
          'configure' => 'admin/config/media/media_browser_plus_settings',
          'dependencies' => 
          array (
            0 => 'media (7.x-2.x)',
            1 => 'taxonomy',
            2 => 'views_tree',
            3 => 'views_bulk_operations',
            4 => 'multiform',
          ),
          'files' => 
          array (
            0 => 'views/media_browser_plus_views_plugin_style_media_browser.inc',
            1 => 'views/media_browser_plus_views_handler_field_preview.inc',
            2 => 'views/media_browser_plus_views_handler_field_preview_vbo.inc',
            3 => 'views/media_browser_plus_views_handler_area_actions.inc',
            4 => 'views/media_browser_plus_views_handler_area_basket.inc',
            5 => 'views/media_browser_plus_views_handler_area_navigation.inc',
          ),
          'version' => '7.x-3.0-beta4',
          'project' => 'media_browser_plus',
          'datestamp' => '1471499341',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.0-beta4',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'php' => '5.3',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/webform.webformconditionals.inc',
            1 => 'includes/exporters/webform_exporter_delimited.inc',
            2 => 'includes/exporters/webform_exporter_excel_delimited.inc',
            3 => 'includes/exporters/webform_exporter_excel_xlsx.inc',
            4 => 'includes/exporters/webform_exporter.inc',
            5 => 'views/webform_handler_area_result_pager.inc',
            6 => 'views/webform_handler_field_form_body.inc',
            7 => 'views/webform_handler_field_is_draft.inc',
            8 => 'views/webform_handler_field_node_link_edit.inc',
            9 => 'views/webform_handler_field_node_link_results.inc',
            10 => 'views/webform_handler_field_submission_count.inc',
            11 => 'views/webform_handler_field_submission_data.inc',
            12 => 'views/webform_handler_field_submission_link.inc',
            13 => 'views/webform_handler_field_webform_status.inc',
            14 => 'views/webform_handler_filter_is_draft.inc',
            15 => 'views/webform_handler_filter_submission_data.inc',
            16 => 'views/webform_handler_filter_webform_status.inc',
            17 => 'views/webform_handler_numeric_data.inc',
            18 => 'views/webform_handler_relationship_submission_data.inc',
            19 => 'views/webform_plugin_row_submission_view.inc',
            20 => 'tests/WebformComponentsTestCase.test',
            21 => 'tests/WebformConditionalsTestCase.test',
            22 => 'tests/WebformGeneralTestCase.test',
            23 => 'tests/WebformPermissionsTestCase.test',
            24 => 'tests/WebformSubmissionTestCase.test',
            25 => 'tests/WebformTestCase.test',
          ),
          'version' => '7.x-4.19',
          'project' => 'webform',
          'datestamp' => '1546876989',
        ),
        'schema_version' => '7431',
        'version' => '7.x-4.19',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File Entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
            3 => 'system (>=7.33)',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_rendered.inc',
            2 => 'views/views_handler_field_file_type.inc',
            3 => 'views/views_handler_filter_file_type.inc',
            4 => 'views/views_handler_filter_schema_type.inc',
            5 => 'views/views_handler_field_file_filename.inc',
            6 => 'views/views_handler_field_file_link.inc',
            7 => 'views/views_handler_field_file_link_edit.inc',
            8 => 'views/views_handler_field_file_link_delete.inc',
            9 => 'views/views_handler_field_file_link_download.inc',
            10 => 'views/views_handler_field_file_link_usage.inc',
            11 => 'views/views_plugin_row_file_rss.inc',
            12 => 'views/views_plugin_row_file_view.inc',
            13 => 'file_entity.test',
            14 => 'file_entity_views.test',
          ),
          'configure' => 'admin/config/media/file-settings',
          'version' => '7.x-2.25',
          'project' => 'file_entity',
          'datestamp' => '1541794687',
          'php' => '5.2.4',
        ),
        'schema_version' => '7216',
        'version' => '7.x-2.25',
      ),
      'calendar' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/calendar/calendar.module',
        'basename' => 'calendar.module',
        'name' => 'calendar',
        'info' => 
        array (
          'name' => 'Calendar',
          'description' => 'Views plugin to display views containing dates as Calendars.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_views',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/calendar_multiday.css',
            ),
          ),
          'files' => 
          array (
            0 => 'calendar.install',
            1 => 'calendar.module',
            2 => 'includes/calendar.views.inc',
            3 => 'includes/calendar_plugin_style.inc',
            4 => 'includes/calendar_plugin_row.inc',
            5 => 'includes/calendar.views_template.inc',
            6 => 'theme/theme.inc',
            7 => 'theme/calendar-style.tpl.php',
          ),
          'version' => '7.x-3.5',
          'project' => 'calendar',
          'datestamp' => '1413299943',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-3.5',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.migrate.inc',
            1 => 'tests/link.test',
            2 => 'tests/link.attribute.test',
            3 => 'tests/link.crud.test',
            4 => 'tests/link.crud_browser.test',
            5 => 'tests/link.token.test',
            6 => 'tests/link.entity_token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'link',
          'datestamp' => '1526190487',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.5',
      ),
      'redirect' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/redirect/redirect.module',
        'basename' => 'redirect.module',
        'name' => 'redirect',
        'info' => 
        array (
          'name' => 'Redirect',
          'description' => 'Allows users to redirect from old URLs to new URLs.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'redirect.controller.inc',
            1 => 'redirect.test',
            2 => 'views/redirect.views.inc',
            3 => 'views/redirect_handler_filter_redirect_type.inc',
            4 => 'views/redirect_handler_field_redirect_source.inc',
            5 => 'views/redirect_handler_field_redirect_redirect.inc',
            6 => 'views/redirect_handler_field_redirect_operations.inc',
            7 => 'views/redirect_handler_field_redirect_link_edit.inc',
            8 => 'views/redirect_handler_field_redirect_link_delete.inc',
          ),
          'configure' => 'admin/config/search/redirect/settings',
          'version' => '7.x-1.0-rc3',
          'project' => 'redirect',
          'datestamp' => '1436393342',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.0-rc3',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-3.9',
          'project' => 'views_slideshow',
          'datestamp' => '1496893153',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'views_slideshow_simple_pager' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_slideshow/contrib/views_slideshow_simple_pager/views_slideshow_simple_pager.module',
        'basename' => 'views_slideshow_simple_pager.module',
        'name' => 'views_slideshow_simple_pager',
        'info' => 
        array (
          'name' => 'Views Slideshow Simple Pager',
          'description' => 'Provides a simple pager for Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-3.9',
          'project' => 'views_slideshow',
          'datestamp' => '1496893153',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'views_slideshow',
          'datestamp' => '1496893153',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.9',
      ),
      'jquerymenu' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/jquerymenu/jquerymenu.module',
        'basename' => 'jquerymenu.module',
        'name' => 'jquerymenu',
        'info' => 
        array (
          'name' => 'Jquery Menu',
          'description' => 'Enables expandable jquery menus.',
          'package' => 'User Interface',
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/jquerymenu/settings',
          'version' => '7.x-4.0-alpha3',
          'project' => 'jquerymenu',
          'datestamp' => '1351218712',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'version' => '7.x-4.0-alpha3',
      ),
      'workbench' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench/workbench.module',
        'basename' => 'workbench.module',
        'name' => 'workbench',
        'info' => 
        array (
          'name' => 'Workbench',
          'description' => 'Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'configure' => 'admin/config/workbench/settings',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'version' => '7.x-1.2',
          'project' => 'workbench',
          'datestamp' => '1358534592',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.2',
      ),
      'better_formats' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/better_formats/better_formats.module',
        'basename' => 'better_formats.module',
        'name' => 'better_formats',
        'info' => 
        array (
          'name' => 'Better Formats',
          'description' => 'Enhances the core input format system by managing input format defaults and settings.',
          'core' => '7.x',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.0-beta2',
          'project' => 'better_formats',
          'datestamp' => '1453922961',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.0-beta2',
      ),
      'domain_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain_blocks/domain_blocks.module',
        'basename' => 'domain_blocks.module',
        'name' => 'domain_blocks',
        'info' => 
        array (
          'name' => 'Domain Blocks',
          'description' => 'Provides domain specific visibility settings for blocks',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain (3.x)',
            1 => 'block',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'domain_blocks.install',
            1 => 'domain_blocks.module',
          ),
          'version' => '7.x-3.0',
          'project' => 'domain_blocks',
          'datestamp' => '1445361540',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.0',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Field Group',
          'description' => 'Provides the ability to group your fields on both form and display.',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/field_group.ui.test',
            1 => 'tests/field_group.display.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'field_group',
          'datestamp' => '1509751991',
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'version' => '7.x-1.6',
      ),
      'admin_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_views/admin_views.module',
        'basename' => 'admin_views.module',
        'name' => 'admin_views',
        'info' => 
        array (
          'name' => 'Administration views',
          'description' => 'Replaces all system object management pages in Drupal core with real views.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations (>=7.x-3.2)',
          ),
          'files' => 
          array (
            0 => 'plugins/views_plugin_display_system.inc',
            1 => 'plugins/views_plugin_access_menu.inc',
            2 => 'tests/admin_views.test',
          ),
          'version' => '7.x-1.6',
          'project' => 'admin_views',
          'datestamp' => '1470165840',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.6',
      ),
      'ckeditor_link' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ckeditor_link/ckeditor_link.module',
        'basename' => 'ckeditor_link.module',
        'name' => 'ckeditor_link',
        'info' => 
        array (
          'name' => 'CKEditor Link',
          'description' => 'Easily create links to Drupal internal paths through CKEditor.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/ckeditor_link',
          'version' => '7.x-2.4',
          'project' => 'ckeditor_link',
          'datestamp' => '1454115840',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.4',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc6',
          'project' => 'admin_menu',
          'datestamp' => '1543859284',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-rc6',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc6',
          'project' => 'admin_menu',
          'datestamp' => '1543859284',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'version' => '7.x-3.0-rc6',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc6',
          'project' => 'admin_menu',
          'datestamp' => '1543859284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-rc6',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'image',
            1 => 'strongarm',
            2 => 'taxonomy',
            3 => 'views',
          ),
          'configure' => 'admin/structure/features/settings',
          'version' => '7.x-2.11',
          'project' => 'features',
          'datestamp' => '1541050686',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.11',
      ),
      'multiform' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/multiform/multiform.module',
        'basename' => 'multiform.module',
        'name' => 'multiform',
        'info' => 
        array (
          'name' => 'Multiple forms',
          'description' => 'Allows displaying and submitting multiple forms in one form',
          'files' => 
          array (
            0 => 'multiform.module',
            1 => 'tests/multiform.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.6',
          'project' => 'multiform',
          'datestamp' => '1544155384',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.6',
      ),
      'views_flipped_table' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_flipped_table/views_flipped_table.module',
        'basename' => 'views_flipped_table.module',
        'name' => 'views_flipped_table',
        'info' => 
        array (
          'name' => 'Views Flipped Table',
          'description' => 'Table style with rows and columns flipped.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_flipped_table.module',
            1 => 'views_flipped_table.views.inc',
            2 => 'views_flipped_table.module',
            3 => 'views_flipped_table_plugin_style_flipped_table.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_summary_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_summary_taxonomy/views_summary_taxonomy.module',
        'basename' => 'views_summary_taxonomy.module',
        'name' => 'views_summary_taxonomy',
        'info' => 
        array (
          'name' => 'Views Taxonomy Summary',
          'description' => 'Provides a summary style plugin suitable for displaying hierarchical taxonomies.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'taxonomy',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_block' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_block/views_block.module',
        'basename' => 'views_block.module',
        'name' => 'views_block',
        'info' => 
        array (
          'name' => 'Views Type Block',
          'description' => 'Exposes blocks as Views objects.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'block',
            2 => 'views_bulk_operations',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_composite_exposed_form' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_composite_exposed_form/views_composite_exposed_form.module',
        'basename' => 'views_composite_exposed_form.module',
        'name' => 'views_composite_exposed_form',
        'info' => 
        array (
          'name' => 'Views Composite Exposed Form Plugin',
          'description' => 'Allows multiple exposed form plugins to be activated simultaneously.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_composite_exposed_form_plugin.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_filters_selective' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_filters_selective/views_filters_selective.module',
        'basename' => 'views_filters_selective.module',
        'name' => 'views_filters_selective',
        'info' => 
        array (
          'name' => 'Views Selective Exposed Filters',
          'description' => 'Restrict exposed filter values to those present in the result set.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_handler_filter_selective.inc',
          ),
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_display_block_path' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_display_block_path/views_display_block_path.module',
        'basename' => 'views_display_block_path.module',
        'name' => 'views_display_block_path',
        'info' => 
        array (
          'name' => 'Views Display Block Path',
          'description' => 'Extends block display plugin to support URL path and use exposed filter form without Ajax.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'views_perm' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_hacks/views_perm/views_perm.module',
        'basename' => 'views_perm.module',
        'name' => 'views_perm',
        'info' => 
        array (
          'name' => 'Views Perm',
          'description' => 'Exposes permission information to Views.',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0-alpha2',
          'project' => 'views_hacks',
          'datestamp' => '1366174582',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-alpha2',
      ),
      'domain_nav' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_nav/domain_nav.module',
        'basename' => 'domain_nav.module',
        'name' => 'domain_nav',
        'info' => 
        array (
          'name' => 'Domain Navigation',
          'description' => 'Navigation block and menu options for Domain Access',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'domain_nav.css',
            ),
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-3.16',
      ),
      'domain_source' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_source/domain_source.module',
        'basename' => 'domain_source.module',
        'name' => 'domain_source',
        'info' => 
        array (
          'name' => 'Domain Source',
          'description' => 'Creates a canonical source domain for linking to content from other domains.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/domain_source_handler_filter_domain_id.inc',
            1 => 'tests/domain_source.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.16',
      ),
      'domain_content' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_content/domain_content.module',
        'basename' => 'domain_content.module',
        'name' => 'domain_content',
        'info' => 
        array (
          'name' => 'Domain Content',
          'description' => 'Provides a content batch editing screen for each active domain.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.16',
      ),
      'domain_settings' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_settings/domain_settings.module',
        'basename' => 'domain_settings.module',
        'name' => 'domain_settings',
        'info' => 
        array (
          'name' => 'Domain Settings',
          'description' => 'Expanded site configuration options for Domain Access.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
            1 => 'domain_conf',
          ),
          'core' => '7.x',
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'version' => '7.x-3.16',
      ),
      'domain_strict' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_strict/domain_strict.module',
        'basename' => 'domain_strict.module',
        'name' => 'domain_strict',
        'info' => 
        array (
          'name' => 'Domain Strict',
          'description' => 'Forces users to be assigned to a domain in order to view content on that domain.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'domain_strict.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.16',
      ),
      'domain_alias' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_alias/domain_alias.module',
        'basename' => 'domain_alias.module',
        'name' => 'domain_alias',
        'info' => 
        array (
          'name' => 'Domain Alias',
          'description' => 'Advanced domain matching methods for Domain Access.',
          'core' => '7.x',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => '7.x-3.16',
      ),
      'domain_conf' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_conf/domain_conf.module',
        'basename' => 'domain_conf.module',
        'name' => 'domain_conf',
        'info' => 
        array (
          'name' => 'Domain Configuration',
          'description' => 'Advanced site configuration options for Domain Access.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/domain_conf.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'version' => '7.x-3.16',
      ),
      'domain_theme' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain_theme/domain_theme.module',
        'basename' => 'domain_theme.module',
        'name' => 'domain_theme',
        'info' => 
        array (
          'name' => 'Domain Theme',
          'description' => 'Assign themes to domains created by the Domain Access module',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.16',
      ),
      'domain' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain/domain.module',
        'basename' => 'domain.module',
        'name' => 'domain',
        'info' => 
        array (
          'name' => 'Domain Access',
          'description' => 'A domain-based access control system',
          'package' => 'Domain Access',
          'core' => '7.x',
          'configure' => 'admin/structure/domain/settings',
          'files' => 
          array (
            0 => 'domain.migrate.inc',
            1 => 'tests/domain.test',
          ),
          'version' => '7.x-3.16',
          'project' => 'domain',
          'datestamp' => '1545060487',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7312',
        'version' => '7.x-3.16',
      ),
      'drafty_enforce' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/drafty/modules/drafty_enforce/drafty_enforce.module',
        'basename' => 'drafty_enforce.module',
        'name' => 'drafty_enforce',
        'info' => 
        array (
          'name' => 'Drafty Enforce',
          'description' => 'Forces all new revisions to be drafts.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'drafty',
          ),
          'weight' => '-1',
          'files' => 
          array (
            0 => 'DraftyEnforceTestCase.test',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'drafty',
          'datestamp' => '1510238214',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'drafty_1992010' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/drafty/modules/drafty_1992010/drafty_1992010.module',
        'basename' => 'drafty_1992010.module',
        'name' => 'drafty_1992010',
        'info' => 
        array (
          'name' => 'Drafty http://drupal.org/node/1992010',
          'description' => 'Works around a core bug related to field translations via Entity Translation, see http://drupal.org/node/1992010 for full details.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'drafty',
            1 => 'entity_translation',
          ),
          'weight' => '-50',
          'test_dependencies' => 
          array (
            0 => 'entity_translation',
          ),
          'files' => 
          array (
            0 => 'Drafty1992010Test.test',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'drafty',
          'datestamp' => '1510238214',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'drafty' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/drafty/drafty.module',
        'basename' => 'drafty.module',
        'name' => 'drafty',
        'info' => 
        array (
          'name' => 'Drafty',
          'description' => 'Facilitates handling of draft revisions, aka forward revisions.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'configure' => 'admin/config/system/drafty',
          'files' => 
          array (
            0 => 'tests/DraftyWebTestCase.test',
            1 => 'tests/DraftyTestCase.test',
            2 => 'tests/DraftyEntityTranslationTest.test',
            3 => 'tests/DraftyFieldCollectionTest.test',
            4 => 'tests/DraftyTitleTestCase.test',
            5 => 'tests/DraftyWorkbenchModerationTests.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'entity_translation',
            1 => 'field_collection',
            2 => 'title',
            3 => 'workbench',
            4 => 'workbench_moderation',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'drafty',
          'datestamp' => '1510238214',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'version' => '7.x-2.5',
          'project' => 'google_analytics',
          'datestamp' => '1531469026',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.5',
      ),
      'variable_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_views/variable_views.module',
        'basename' => 'variable_views.module',
        'name' => 'variable_views',
        'info' => 
        array (
          'name' => 'Variable views',
          'description' => 'Provides views integration for variable, included a default variable argument.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'views',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views_plugin_argument_default_variable.inc',
            1 => 'includes/views_handler_field_variable_title.inc',
            2 => 'includes/views_handler_field_variable_value.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_example/variable_example.module',
        'basename' => 'variable_example.module',
        'name' => 'variable_example',
        'info' => 
        array (
          'name' => 'Variable example',
          'description' => 'An example module showing how to use the Variable API and providing some variables.',
          'dependencies' => 
          array (
            0 => 'variable',
            1 => 'variable_store',
          ),
          'package' => 'Example modules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'variable_example.variable.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_admin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_admin/variable_admin.module',
        'basename' => 'variable_admin.module',
        'name' => 'variable_admin',
        'info' => 
        array (
          'name' => 'Variable admin',
          'description' => 'Variable Administration UI',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'variable_store' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_store/variable_store.module',
        'basename' => 'variable_store.module',
        'name' => 'variable_store',
        'info' => 
        array (
          'name' => 'Variable store',
          'description' => 'Database storage for variable realms. This is an API module.',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_store.class.inc',
            1 => 'variable_store.test',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable_realm' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable_realm/variable_realm.module',
        'basename' => 'variable_realm.module',
        'name' => 'variable_realm',
        'info' => 
        array (
          'name' => 'Variable realm',
          'description' => 'API to use variable realms from different modules',
          'dependencies' => 
          array (
            0 => 'variable',
          ),
          'package' => 'Variable',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'files' => 
          array (
            0 => 'variable_realm.class.inc',
            1 => 'variable_realm_union.class.inc',
          ),
          'project' => 'variable',
          'datestamp' => '1398250128',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.5',
      ),
      'variable' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/variable/variable.module',
        'basename' => 'variable.module',
        'name' => 'variable',
        'info' => 
        array (
          'name' => 'Variable',
          'description' => 'Variable Information and basic variable API',
          'package' => 'Variable',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/forum.variable.inc',
            1 => 'includes/locale.variable.inc',
            2 => 'includes/menu.variable.inc',
            3 => 'includes/node.variable.inc',
            4 => 'includes/system.variable.inc',
            5 => 'includes/taxonomy.variable.inc',
            6 => 'includes/translation.variable.inc',
            7 => 'includes/user.variable.inc',
            8 => 'variable.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'variable',
          'datestamp' => '1398250128',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.5',
      ),
      'context_session' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/context_session/context_session.module',
        'basename' => 'context_session.module',
        'name' => 'context_session',
        'info' => 
        array (
          'name' => 'Context session',
          'description' => 'Exposes session variables to context and expose a context condition.',
          'package' => 'Context',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'files' => 
          array (
            0 => 'context_condition_session.inc',
          ),
          'configure' => 'admin/structure/context/settings/session',
          'version' => '7.x-1.x-dev',
          'project' => 'context_session',
          'datestamp' => '1380567499',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'flexslider_views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flexslider_views_slideshow/flexslider_views_slideshow.module',
        'basename' => 'flexslider_views_slideshow.module',
        'name' => 'flexslider_views_slideshow',
        'info' => 
        array (
          'name' => 'FlexSlider Views Slideshow',
          'description' => 'NOT FUNCTIONAL - Integrate the FlexSlider library with Views Slideshow',
          'core' => '7.x',
          'package' => 'FlexSlider',
          'dependencies' => 
          array (
            0 => 'flexslider',
            1 => 'views_slideshow',
          ),
          'files' => 
          array (
            0 => 'flexslider_views_slideshow.module',
            1 => 'flexslider_views_slideshow.views_slideshow.inc',
            2 => 'theme/flexslider_views_slideshow.theme.inc',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'flexslider_views_slideshow',
          'datestamp' => '1380579618',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.x-dev',
      ),
      'jcarousel' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/jcarousel/jcarousel.module',
        'basename' => 'jcarousel.module',
        'name' => 'jcarousel',
        'info' => 
        array (
          'name' => 'jCarousel',
          'description' => 'Create jQuery-based carousel rotators.',
          'package' => 'User interface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'jcarousel.module',
            1 => 'includes/jcarousel.views.inc',
            2 => 'includes/jcarousel_style_plugin.inc',
          ),
          'version' => '7.x-2.7',
          'project' => 'jcarousel',
          'datestamp' => '1420460282',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.7',
      ),
      'image_resize_filter' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/image_resize_filter/image_resize_filter.module',
        'basename' => 'image_resize_filter.module',
        'name' => 'image_resize_filter',
        'info' => 
        array (
          'name' => 'Image resize filter',
          'description' => 'Filter to automatically scale images to their height and width dimensions.',
          'core' => '7.x',
          'package' => 'Input filters',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.16',
          'project' => 'image_resize_filter',
          'datestamp' => '1438457958',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.16',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.test',
          ),
          'version' => '7.x-1.7',
          'project' => 'token',
          'datestamp' => '1485316088',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.7',
      ),
      'imagecache_coloractions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/coloractions/imagecache_coloractions.module',
        'basename' => 'imagecache_coloractions.module',
        'name' => 'imagecache_coloractions',
        'info' => 
        array (
          'name' => 'Imagecache Color Actions',
          'description' => 'Provides image effects color-shifting, invert colors, brightness, posterize and alpha transparency effects. Also provides a change image format effect.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_coloractions.module',
            1 => 'transparency.inc',
            2 => 'tests/green.imagecache_preset.inc',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'version' => '7.x-1.9',
      ),
      'image_effects_text_test' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text_test/image_effects_text_test.module',
        'basename' => 'image_effects_text_test.module',
        'name' => 'image_effects_text_test',
        'info' => 
        array (
          'name' => 'Image Effects Text test',
          'description' => 'Defines image styles that test the text effect.',
          'core' => '7.x',
          'package' => 'Media',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'image_effects_text',
            2 => 'imagecache_canvasactions',
            3 => 'system_stream_wrapper',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'image_effects_text' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/image_effects_text/image_effects_text.module',
        'basename' => 'image_effects_text.module',
        'name' => 'image_effects_text',
        'info' => 
        array (
          'name' => 'Image Effects Text',
          'description' => 'Provides an image effect to overlay text captions on images.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'imagecache_actions',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_canvasactions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/canvasactions/imagecache_canvasactions.module',
        'basename' => 'imagecache_canvasactions.module',
        'name' => 'imagecache_canvasactions',
        'info' => 
        array (
          'name' => 'Imagecache Canvas Actions',
          'description' => 'Provides image effects for manipulating image canvases: define canvas, image mask, watermark, underlay background image, rounded corners, composite source to image and resize by percent effect. Also provides an aspect switcher (portrait/landscape).',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_autorotate' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/autorotate/imagecache_autorotate.module',
        'basename' => 'imagecache_autorotate.module',
        'name' => 'imagecache_autorotate',
        'info' => 
        array (
          'name' => 'Imagecache Autorotate',
          'description' => 'Provides an image effect to autorotate an image based on EXIF data.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_customactions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/customactions/imagecache_customactions.module',
        'basename' => 'imagecache_customactions.module',
        'name' => 'imagecache_customactions',
        'info' => 
        array (
          'name' => 'Imagecache Custom Actions',
          'description' => 'Provides the custom and subroutine image effects.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.9',
      ),
      'image_styles_admin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/image_styles_admin/image_styles_admin.module',
        'basename' => 'image_styles_admin.module',
        'name' => 'image_styles_admin',
        'info' => 
        array (
          'name' => 'Image styles admin',
          'description' => 'Provides additional administrative functionality to duplicate, export or import image styles.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_testsuite' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/tests/imagecache_testsuite.module',
        'basename' => 'imagecache_testsuite.module',
        'name' => 'imagecache_testsuite',
        'info' => 
        array (
          'name' => 'Imagecache_actions Test Suite',
          'description' => 'Displays a collection of demo image styles.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'system_stream_wrapper',
          ),
          'features' => 
          array (
            'image' => 
            array (
              0 => 'corners_combo',
            ),
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'imagecache_actions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/imagecache_actions/imagecache_actions.module',
        'basename' => 'imagecache_actions.module',
        'name' => 'imagecache_actions',
        'info' => 
        array (
          'name' => 'Imagecache Actions',
          'description' => 'Provides utility code for a number of additional image effects that can be found in the sub modules.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.9',
          'project' => 'imagecache_actions',
          'datestamp' => '1521550387',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.9',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => NULL,
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          '# @codingStandardsIgnoreLine
files' => 
          array (
            0 => 'views_ui.module',
          ),
          'files' => 
          array (
            0 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.20',
          'project' => 'views',
          'datestamp' => '1523668093',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.20',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_messages.inc',
            2 => 'handlers/views_handler_area_result.inc',
            3 => 'handlers/views_handler_area_text.inc',
            4 => 'handlers/views_handler_area_text_custom.inc',
            5 => 'handlers/views_handler_area_view.inc',
            6 => 'handlers/views_handler_argument.inc',
            7 => 'handlers/views_handler_argument_date.inc',
            8 => 'handlers/views_handler_argument_formula.inc',
            9 => 'handlers/views_handler_argument_many_to_one.inc',
            10 => 'handlers/views_handler_argument_null.inc',
            11 => 'handlers/views_handler_argument_numeric.inc',
            12 => 'handlers/views_handler_argument_string.inc',
            13 => 'handlers/views_handler_argument_group_by_numeric.inc',
            14 => 'handlers/views_handler_field.inc',
            15 => 'handlers/views_handler_field_counter.inc',
            16 => 'handlers/views_handler_field_boolean.inc',
            17 => 'handlers/views_handler_field_contextual_links.inc',
            18 => 'handlers/views_handler_field_ctools_dropdown.inc',
            19 => 'handlers/views_handler_field_custom.inc',
            20 => 'handlers/views_handler_field_date.inc',
            21 => 'handlers/views_handler_field_entity.inc',
            22 => 'handlers/views_handler_field_links.inc',
            23 => 'handlers/views_handler_field_markup.inc',
            24 => 'handlers/views_handler_field_math.inc',
            25 => 'handlers/views_handler_field_numeric.inc',
            26 => 'handlers/views_handler_field_prerender_list.inc',
            27 => 'handlers/views_handler_field_time_interval.inc',
            28 => 'handlers/views_handler_field_serialized.inc',
            29 => 'handlers/views_handler_field_machine_name.inc',
            30 => 'handlers/views_handler_field_url.inc',
            31 => 'handlers/views_handler_filter.inc',
            32 => 'handlers/views_handler_filter_boolean_operator.inc',
            33 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            34 => 'handlers/views_handler_filter_combine.inc',
            35 => 'handlers/views_handler_filter_date.inc',
            36 => 'handlers/views_handler_filter_equality.inc',
            37 => 'handlers/views_handler_filter_entity_bundle.inc',
            38 => 'handlers/views_handler_filter_group_by_numeric.inc',
            39 => 'handlers/views_handler_filter_in_operator.inc',
            40 => 'handlers/views_handler_filter_many_to_one.inc',
            41 => 'handlers/views_handler_filter_numeric.inc',
            42 => 'handlers/views_handler_filter_string.inc',
            43 => 'handlers/views_handler_filter_fields_compare.inc',
            44 => 'handlers/views_handler_relationship.inc',
            45 => 'handlers/views_handler_relationship_groupwise_max.inc',
            46 => 'handlers/views_handler_sort.inc',
            47 => 'handlers/views_handler_sort_date.inc',
            48 => 'handlers/views_handler_sort_formula.inc',
            49 => 'handlers/views_handler_sort_group_by_numeric.inc',
            50 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            51 => 'handlers/views_handler_sort_random.inc',
            52 => 'includes/base.inc',
            53 => 'includes/handlers.inc',
            54 => 'includes/plugins.inc',
            55 => 'includes/view.inc',
            56 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            57 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            58 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            59 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            60 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            61 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            62 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            63 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            64 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            65 => 'modules/book/views_plugin_argument_default_book_root.inc',
            66 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            67 => 'modules/comment/views_handler_field_comment.inc',
            68 => 'modules/comment/views_handler_field_comment_depth.inc',
            69 => 'modules/comment/views_handler_field_comment_link.inc',
            70 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            71 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            72 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            73 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            74 => 'modules/comment/views_handler_field_comment_node_link.inc',
            75 => 'modules/comment/views_handler_field_comment_username.inc',
            76 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            77 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            78 => 'modules/comment/views_handler_field_node_comment.inc',
            79 => 'modules/comment/views_handler_field_node_new_comments.inc',
            80 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            81 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            82 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            83 => 'modules/comment/views_handler_filter_node_comment.inc',
            84 => 'modules/comment/views_handler_sort_comment_thread.inc',
            85 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            86 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            87 => 'modules/comment/views_plugin_row_comment_rss.inc',
            88 => 'modules/comment/views_plugin_row_comment_view.inc',
            89 => 'modules/contact/views_handler_field_contact_link.inc',
            90 => 'modules/field/views_handler_field_field.inc',
            91 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            92 => 'modules/field/views_handler_argument_field_list.inc',
            93 => 'modules/field/views_handler_filter_field_list_boolean.inc',
            94 => 'modules/field/views_handler_argument_field_list_string.inc',
            95 => 'modules/field/views_handler_filter_field_list.inc',
            96 => 'modules/filter/views_handler_field_filter_format_name.inc',
            97 => 'modules/locale/views_handler_field_node_language.inc',
            98 => 'modules/locale/views_handler_filter_node_language.inc',
            99 => 'modules/locale/views_handler_argument_locale_group.inc',
            100 => 'modules/locale/views_handler_argument_locale_language.inc',
            101 => 'modules/locale/views_handler_field_locale_group.inc',
            102 => 'modules/locale/views_handler_field_locale_language.inc',
            103 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            104 => 'modules/locale/views_handler_filter_locale_group.inc',
            105 => 'modules/locale/views_handler_filter_locale_language.inc',
            106 => 'modules/locale/views_handler_filter_locale_version.inc',
            107 => 'modules/locale/views_handler_sort_node_language.inc',
            108 => 'modules/node/views_handler_argument_dates_various.inc',
            109 => 'modules/node/views_handler_argument_node_language.inc',
            110 => 'modules/node/views_handler_argument_node_nid.inc',
            111 => 'modules/node/views_handler_argument_node_type.inc',
            112 => 'modules/node/views_handler_argument_node_vid.inc',
            113 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            114 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            115 => 'modules/node/views_handler_field_node.inc',
            116 => 'modules/node/views_handler_field_node_link.inc',
            117 => 'modules/node/views_handler_field_node_link_delete.inc',
            118 => 'modules/node/views_handler_field_node_link_edit.inc',
            119 => 'modules/node/views_handler_field_node_revision.inc',
            120 => 'modules/node/views_handler_field_node_revision_link.inc',
            121 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            122 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            123 => 'modules/node/views_handler_field_node_path.inc',
            124 => 'modules/node/views_handler_field_node_type.inc',
            125 => 'modules/node/views_handler_field_node_version_count.inc',
            126 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            127 => 'modules/node/views_handler_filter_node_access.inc',
            128 => 'modules/node/views_handler_filter_node_status.inc',
            129 => 'modules/node/views_handler_filter_node_type.inc',
            130 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            131 => 'modules/node/views_handler_filter_node_version_count.inc',
            132 => 'modules/node/views_handler_sort_node_version_count.inc',
            133 => 'modules/node/views_plugin_argument_default_node.inc',
            134 => 'modules/node/views_plugin_argument_validate_node.inc',
            135 => 'modules/node/views_plugin_row_node_rss.inc',
            136 => 'modules/node/views_plugin_row_node_view.inc',
            137 => 'modules/profile/views_handler_field_profile_date.inc',
            138 => 'modules/profile/views_handler_field_profile_list.inc',
            139 => 'modules/profile/views_handler_filter_profile_selection.inc',
            140 => 'modules/search/views_handler_argument_search.inc',
            141 => 'modules/search/views_handler_field_search_score.inc',
            142 => 'modules/search/views_handler_filter_search.inc',
            143 => 'modules/search/views_handler_sort_search_score.inc',
            144 => 'modules/search/views_plugin_row_search_view.inc',
            145 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            146 => 'modules/statistics/views_handler_field_node_counter_timestamp.inc',
            147 => 'modules/statistics/views_handler_field_statistics_numeric.inc',
            148 => 'modules/system/views_handler_argument_file_fid.inc',
            149 => 'modules/system/views_handler_field_file.inc',
            150 => 'modules/system/views_handler_field_file_extension.inc',
            151 => 'modules/system/views_handler_field_file_filemime.inc',
            152 => 'modules/system/views_handler_field_file_uri.inc',
            153 => 'modules/system/views_handler_field_file_status.inc',
            154 => 'modules/system/views_handler_filter_file_status.inc',
            155 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            156 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            157 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            158 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_join.inc',
            159 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            160 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            161 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            162 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            163 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            164 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            165 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            166 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            167 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth_join.inc',
            168 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            169 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            170 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            171 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            172 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            173 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
            174 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
            175 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
            176 => 'modules/system/views_handler_filter_system_type.inc',
            177 => 'modules/translation/views_handler_argument_node_tnid.inc',
            178 => 'modules/translation/views_handler_field_node_link_translate.inc',
            179 => 'modules/translation/views_handler_field_node_translation_link.inc',
            180 => 'modules/translation/views_handler_filter_node_tnid.inc',
            181 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            182 => 'modules/translation/views_handler_relationship_translation.inc',
            183 => 'modules/user/views_handler_argument_user_uid.inc',
            184 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            185 => 'modules/user/views_handler_field_user.inc',
            186 => 'modules/user/views_handler_field_user_language.inc',
            187 => 'modules/user/views_handler_field_user_link.inc',
            188 => 'modules/user/views_handler_field_user_link_cancel.inc',
            189 => 'modules/user/views_handler_field_user_link_edit.inc',
            190 => 'modules/user/views_handler_field_user_mail.inc',
            191 => 'modules/user/views_handler_field_user_name.inc',
            192 => 'modules/user/views_handler_field_user_permissions.inc',
            193 => 'modules/user/views_handler_field_user_picture.inc',
            194 => 'modules/user/views_handler_field_user_roles.inc',
            195 => 'modules/user/views_handler_filter_user_current.inc',
            196 => 'modules/user/views_handler_filter_user_name.inc',
            197 => 'modules/user/views_handler_filter_user_permissions.inc',
            198 => 'modules/user/views_handler_filter_user_roles.inc',
            199 => 'modules/user/views_plugin_argument_default_current_user.inc',
            200 => 'modules/user/views_plugin_argument_default_user.inc',
            201 => 'modules/user/views_plugin_argument_validate_user.inc',
            202 => 'modules/user/views_plugin_row_user_view.inc',
            203 => 'plugins/views_plugin_access.inc',
            204 => 'plugins/views_plugin_access_none.inc',
            205 => 'plugins/views_plugin_access_perm.inc',
            206 => 'plugins/views_plugin_access_role.inc',
            207 => 'plugins/views_plugin_argument_default.inc',
            208 => 'plugins/views_plugin_argument_default_php.inc',
            209 => 'plugins/views_plugin_argument_default_fixed.inc',
            210 => 'plugins/views_plugin_argument_default_raw.inc',
            211 => 'plugins/views_plugin_argument_validate.inc',
            212 => 'plugins/views_plugin_argument_validate_numeric.inc',
            213 => 'plugins/views_plugin_argument_validate_php.inc',
            214 => 'plugins/views_plugin_cache.inc',
            215 => 'plugins/views_plugin_cache_none.inc',
            216 => 'plugins/views_plugin_cache_time.inc',
            217 => 'plugins/views_plugin_display.inc',
            218 => 'plugins/views_plugin_display_attachment.inc',
            219 => 'plugins/views_plugin_display_block.inc',
            220 => 'plugins/views_plugin_display_default.inc',
            221 => 'plugins/views_plugin_display_embed.inc',
            222 => 'plugins/views_plugin_display_extender.inc',
            223 => 'plugins/views_plugin_display_feed.inc',
            224 => 'plugins/views_plugin_display_page.inc',
            225 => 'plugins/views_plugin_exposed_form_basic.inc',
            226 => 'plugins/views_plugin_exposed_form.inc',
            227 => 'plugins/views_plugin_exposed_form_input_required.inc',
            228 => 'plugins/views_plugin_localization_core.inc',
            229 => 'plugins/views_plugin_localization.inc',
            230 => 'plugins/views_plugin_localization_none.inc',
            231 => 'plugins/views_plugin_pager.inc',
            232 => 'plugins/views_plugin_pager_full.inc',
            233 => 'plugins/views_plugin_pager_mini.inc',
            234 => 'plugins/views_plugin_pager_none.inc',
            235 => 'plugins/views_plugin_pager_some.inc',
            236 => 'plugins/views_plugin_query.inc',
            237 => 'plugins/views_plugin_query_default.inc',
            238 => 'plugins/views_plugin_row.inc',
            239 => 'plugins/views_plugin_row_fields.inc',
            240 => 'plugins/views_plugin_row_rss_fields.inc',
            241 => 'plugins/views_plugin_style.inc',
            242 => 'plugins/views_plugin_style_default.inc',
            243 => 'plugins/views_plugin_style_grid.inc',
            244 => 'plugins/views_plugin_style_list.inc',
            245 => 'plugins/views_plugin_style_jump_menu.inc',
            246 => 'plugins/views_plugin_style_mapping.inc',
            247 => 'plugins/views_plugin_style_rss.inc',
            248 => 'plugins/views_plugin_style_summary.inc',
            249 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            250 => 'plugins/views_plugin_style_summary_unformatted.inc',
            251 => 'plugins/views_plugin_style_table.inc',
            252 => 'tests/handlers/views_handlers.test',
            253 => 'tests/handlers/views_handler_area_text.test',
            254 => 'tests/handlers/views_handler_argument_null.test',
            255 => 'tests/handlers/views_handler_argument_string.test',
            256 => 'tests/handlers/views_handler_field.test',
            257 => 'tests/handlers/views_handler_field_boolean.test',
            258 => 'tests/handlers/views_handler_field_custom.test',
            259 => 'tests/handlers/views_handler_field_counter.test',
            260 => 'tests/handlers/views_handler_field_date.test',
            261 => 'tests/handlers/views_handler_field_file_extension.test',
            262 => 'tests/handlers/views_handler_field_file_size.test',
            263 => 'tests/handlers/views_handler_field_math.test',
            264 => 'tests/handlers/views_handler_field_url.test',
            265 => 'tests/handlers/views_handler_field_xss.test',
            266 => 'tests/handlers/views_handler_filter_combine.test',
            267 => 'tests/handlers/views_handler_filter_date.test',
            268 => 'tests/handlers/views_handler_filter_equality.test',
            269 => 'tests/handlers/views_handler_filter_in_operator.test',
            270 => 'tests/handlers/views_handler_filter_numeric.test',
            271 => 'tests/handlers/views_handler_filter_string.test',
            272 => 'tests/handlers/views_handler_sort_random.test',
            273 => 'tests/handlers/views_handler_sort_date.test',
            274 => 'tests/handlers/views_handler_sort.test',
            275 => 'tests/test_handlers/views_test_area_access.inc',
            276 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            277 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            278 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
            279 => 'tests/plugins/views_plugin_display.test',
            280 => 'tests/styles/views_plugin_style_jump_menu.test',
            281 => 'tests/styles/views_plugin_style.test',
            282 => 'tests/styles/views_plugin_style_base.test',
            283 => 'tests/styles/views_plugin_style_mapping.test',
            284 => 'tests/styles/views_plugin_style_unformatted.test',
            285 => 'tests/views_access.test',
            286 => 'tests/views_analyze.test',
            287 => 'tests/views_basic.test',
            288 => 'tests/views_ajax.test',
            289 => 'tests/views_argument_default.test',
            290 => 'tests/views_argument_validator.test',
            291 => 'tests/views_exposed_form.test',
            292 => 'tests/field/views_fieldapi.test',
            293 => 'tests/views_glossary.test',
            294 => 'tests/views_groupby.test',
            295 => 'tests/views_handlers.test',
            296 => 'tests/views_module.test',
            297 => 'tests/views_pager.test',
            298 => 'tests/views_plugin_localization_test.inc',
            299 => 'tests/views_translatable.test',
            300 => 'tests/views_query.test',
            301 => 'tests/views_upgrade.test',
            302 => 'tests/views_test.views_default.inc',
            303 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            304 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            305 => 'tests/node/views_node_revision_relations.test',
            306 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
            307 => 'tests/user/views_handler_field_user_name.test',
            308 => 'tests/user/views_user_argument_default.test',
            309 => 'tests/user/views_user_argument_validate.test',
            310 => 'tests/user/views_user.test',
            311 => 'tests/views_cache.test',
            312 => 'tests/views_view.test',
            313 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.20',
          'project' => 'views',
          'datestamp' => '1523668093',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'version' => '7.x-3.20',
      ),
      'bulk_media_upload' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/bulk_media_upload/bulk_media_upload.module',
        'basename' => 'bulk_media_upload.module',
        'name' => 'bulk_media_upload',
        'info' => 
        array (
          'name' => 'Bulk Media Upload',
          'core' => '7.x',
          'package' => 'Media',
          'description' => 'With Bulk Media Upload you can upload a bunch of media files and a new node will be created for every file.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'plupload',
            2 => 'token',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'bulk_media_upload',
          'datestamp' => '1413722029',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.x-dev',
      ),
      'actions_permissions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_bulk_operations/actions_permissions.module',
        'basename' => 'actions_permissions.module',
        'name' => 'actions_permissions',
        'info' => 
        array (
          'name' => 'Actions permissions (VBO)',
          'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
          'package' => 'Administration',
          'core' => '7.x',
          'version' => '7.x-3.5',
          'project' => 'views_bulk_operations',
          'datestamp' => '1525821486',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'views_bulk_operations' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/views_bulk_operations/views_bulk_operations.module',
        'basename' => 'views_bulk_operations.module',
        'name' => 'views_bulk_operations',
        'info' => 
        array (
          'name' => 'Views Bulk Operations',
          'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'views (>=3.12)',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2.9',
          'files' => 
          array (
            0 => 'plugins/operation_types/base.class.php',
            1 => 'views/views_bulk_operations_handler_field_operations.inc',
          ),
          'version' => '7.x-3.5',
          'project' => 'views_bulk_operations',
          'datestamp' => '1525821486',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.5',
      ),
      'parser_ical' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/parser_ical/parser_ical.module',
        'basename' => 'parser_ical.module',
        'name' => 'parser_ical',
        'info' => 
        array (
          'name' => 'iCal parser',
          'description' => 'Provides an iCal parser for Feeds module. Requires PHP 5.3',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'feeds',
            1 => 'date',
            2 => 'date_api',
            3 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'parser_ical.module',
            1 => 'includes/ParserIcal.inc',
            2 => 'includes/ParserIcalDate.inc',
            3 => 'includes/ParserIcalCreator.inc',
            4 => 'tests/parser_ical.test',
            5 => 'tests/parser_ical_text.test',
            6 => 'tests/parser_ical_link.test',
            7 => 'tests/parser_ical_date.test',
            8 => 'tests/parser_ical_location.test',
            9 => 'tests/parser_ical_categories.test',
          ),
          'core' => '7.x',
          'php' => '5.3',
          'version' => '7.x-2.x-dev',
          'project' => 'parser_ical',
          'datestamp' => '1380622295',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.x-dev',
      ),
      'remote_stream_wrapper' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/remote_stream_wrapper/remote_stream_wrapper.module',
        'basename' => 'remote_stream_wrapper.module',
        'name' => 'remote_stream_wrapper',
        'info' => 
        array (
          'name' => 'Remote stream wrapper',
          'description' => 'Provides the ability to use external files with filefields without saving the files to your local files directory.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'remote_stream_wrapper.inc',
            1 => 'RemoteStreamWrapperMediaBrowser.inc',
            2 => 'remote_stream_wrapper.test',
          ),
          'suggests' => 
          array (
            0 => 'file',
            1 => 'media',
            2 => 'image',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'remote_stream_wrapper',
          'datestamp' => '1398126831',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0-rc1',
      ),
      'i18n_redirect' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_redirect/i18n_redirect.module',
        'basename' => 'i18n_redirect.module',
        'name' => 'i18n_redirect',
        'info' => 
        array (
          'name' => 'Translation redirect',
          'description' => 'Redirect to translated page when available. SEO for multilingual sites.',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_user' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_user/i18n_user.module',
        'basename' => 'i18n_user.module',
        'name' => 'i18n_user',
        'info' => 
        array (
          'name' => 'User mail translation',
          'description' => 'Translate emails sent from the User module.',
          'core' => '7.x',
          'package' => 'Multilingual - Internationalization',
          'dependencies' => 
          array (
            0 => 'i18n_variable',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_path' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_path/i18n_path.module',
        'basename' => 'i18n_path.module',
        'name' => 'i18n_path',
        'info' => 
        array (
          'name' => 'Path translation',
          'description' => 'Define translations for generic paths',
          'dependencies' => 
          array (
            0 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_path.inc',
            1 => 'i18n_path.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.26',
      ),
      'i18n_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_taxonomy/i18n_taxonomy.module',
        'basename' => 'i18n_taxonomy.module',
        'name' => 'i18n_taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy translation',
          'description' => 'Enables multilingual taxonomy.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'i18n_string',
            2 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_taxonomy.inc',
            1 => 'i18n_taxonomy.pages.inc',
            2 => 'i18n_taxonomy.admin.inc',
            3 => 'i18n_taxonomy.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.26',
      ),
      'i18n_forum' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_forum/i18n_forum.module',
        'basename' => 'i18n_forum.module',
        'name' => 'i18n_forum',
        'info' => 
        array (
          'name' => 'Multilingual forum',
          'description' => 'Enables multilingual forum, translates names and containers.',
          'dependencies' => 
          array (
            0 => 'forum',
            1 => 'i18n_taxonomy',
            2 => 'i18n_node',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_forum.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_node' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_node/i18n_node.module',
        'basename' => 'i18n_node.module',
        'name' => 'i18n_node',
        'info' => 
        array (
          'name' => 'Multilingual content',
          'description' => 'Extended node options for multilingual content',
          'dependencies' => 
          array (
            0 => 'translation',
            1 => 'i18n',
            2 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/node',
          'files' => 
          array (
            0 => 'i18n_node.test',
            1 => 'i18n_node.variable.inc',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'i18n_string' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_string/i18n_string.module',
        'basename' => 'i18n_string.module',
        'name' => 'i18n_string',
        'info' => 
        array (
          'name' => 'String translation',
          'description' => 'Provides support for translation of user defined strings.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_string.admin.inc',
            1 => 'i18n_string.inc',
            2 => 'i18n_string.test',
          ),
          'configure' => 'admin/config/regional/i18n/strings',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.26',
      ),
      'i18n_menu' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_menu/i18n_menu.module',
        'basename' => 'i18n_menu.module',
        'name' => 'i18n_menu',
        'info' => 
        array (
          'name' => 'Menu translation',
          'description' => 'Supports translatable custom menu items.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'menu',
            2 => 'i18n_string',
            3 => 'i18n_translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_menu.inc',
            1 => 'i18n_menu.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'i18n_translation' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_translation/i18n_translation.module',
        'basename' => 'i18n_translation.module',
        'name' => 'i18n_translation',
        'info' => 
        array (
          'name' => 'Translation sets',
          'description' => 'Simple translation sets API for generic objects',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_translation.inc',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_select' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_select/i18n_select.module',
        'basename' => 'i18n_select.module',
        'name' => 'i18n_select',
        'info' => 
        array (
          'name' => 'Multilingual select',
          'description' => 'API module for multilingual content selection',
          'dependencies' => 
          array (
            0 => 'i18n',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/select',
          'files' => 
          array (
            0 => 'i18n_select.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n_block' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_block/i18n_block.module',
        'basename' => 'i18n_block.module',
        'name' => 'i18n_block',
        'info' => 
        array (
          'name' => 'Block languages',
          'description' => 'Enables language selector for blocks and optional block translation.',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_block.inc',
            1 => 'i18n_block.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'i18n_sync' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_sync/i18n_sync.module',
        'basename' => 'i18n_sync.module',
        'name' => 'i18n_sync',
        'info' => 
        array (
          'name' => 'Synchronize translations',
          'description' => 'Synchronizes taxonomy and fields across translations of the same content.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'translation',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_sync.module',
            1 => 'i18n_sync.install',
            2 => 'i18n_sync.module.inc',
            3 => 'i18n_sync.node.inc',
            4 => 'i18n_sync.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.26',
      ),
      'i18n_variable' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_variable/i18n_variable.module',
        'basename' => 'i18n_variable.module',
        'name' => 'i18n_variable',
        'info' => 
        array (
          'name' => 'Variable translation',
          'description' => 'Multilingual variables that switch language depending on page language.',
          'dependencies' => 
          array (
            0 => 'i18n',
            1 => 'variable_store (7.x-2.x)',
            2 => 'variable_realm (7.x-2.x)',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'configure' => 'admin/config/regional/i18n/variable',
          'files' => 
          array (
            0 => 'i18n_variable.class.inc',
            1 => 'i18n_variable.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'version' => '7.x-1.26',
      ),
      'i18n_field' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_field/i18n_field.module',
        'basename' => 'i18n_field.module',
        'name' => 'i18n_field',
        'info' => 
        array (
          'name' => 'Field translation',
          'description' => 'Translate field properties',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_field.inc',
            1 => 'i18n_field.test',
          ),
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-1.26',
      ),
      'i18n_contact' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n_contact/i18n_contact.module',
        'basename' => 'i18n_contact.module',
        'name' => 'i18n_contact',
        'info' => 
        array (
          'name' => 'Contact translation',
          'description' => 'Makes contact categories and replies available for translation.',
          'dependencies' => 
          array (
            0 => 'contact',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.26',
      ),
      'i18n' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/i18n/i18n.module',
        'basename' => 'i18n.module',
        'name' => 'i18n',
        'info' => 
        array (
          'name' => 'Internationalization',
          'description' => 'Extends Drupal support for multilingual features.',
          'dependencies' => 
          array (
            0 => 'locale',
            1 => 'variable',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'i18n_object.inc',
            1 => 'i18n.test',
          ),
          'configure' => 'admin/config/regional/i18n',
          'version' => '7.x-1.26',
          'project' => 'i18n',
          'datestamp' => '1534531985',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'version' => '7.x-1.26',
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Adds YouTube as a supported media provider.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'test_dependencies' => 
          array (
            0 => 'media_internet (2.x)',
          ),
          'files' => 
          array (
            0 => 'media_youtube.test',
            1 => 'includes/MediaYouTubeStreamWrapper.inc',
            2 => 'includes/MediaInternetYouTubeHandler.inc',
          ),
          'version' => '7.x-3.7',
          'project' => 'media_youtube',
          'datestamp' => '1518862084',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-3.7',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0',
          'project' => 'strongarm',
          'datestamp' => '1339604214',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.0',
      ),
      'ical_aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/ical_aggregator/ical_aggregator.module',
        'basename' => 'ical_aggregator.module',
        'name' => 'ical_aggregator',
        'info' => 
        array (
          'name' => 'iCal Aggregator',
          'description' => 'Extends Aggregator to parse iCal.',
          'package' => 'Other',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'aggregator',
          ),
          'files' => 
          array (
            0 => 'ical_aggregator.module',
          ),
          'version' => 'unknown',
          'project' => 'ical_aggregator',
          'datestamp' => '1310051398',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => 'unknown',
      ),
      'commerce_payment_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/payment/modules/commerce_payment_example.module',
        'basename' => 'commerce_payment_example.module',
        'name' => 'commerce_payment_example',
        'info' => 
        array (
          'name' => 'Payment Method Example',
          'description' => 'Provides an example payment method for testing and development.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_payment',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_payment_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/payment/commerce_payment_ui.module',
        'basename' => 'commerce_payment_ui.module',
        'name' => 'commerce_payment_ui',
        'info' => 
        array (
          'name' => 'Payment UI',
          'description' => 'Exposes a default UI for payment method configuration and payment transaction administration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_order',
            3 => 'commerce_order_ui',
            4 => 'commerce_payment',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/payment-methods',
          'files' => 
          array (
            0 => 'tests/commerce_payment_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_payment' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/payment/commerce_payment.module',
        'basename' => 'commerce_payment.module',
        'name' => 'commerce_payment',
        'info' => 
        array (
          'name' => 'Payment',
          'description' => 'Implement core payment features for Drupal commerce.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_order',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_payment.rules.inc',
            1 => 'includes/commerce_payment_transaction.controller.inc',
            2 => 'includes/views/handlers/commerce_payment_handler_area_totals.inc',
            3 => 'includes/views/handlers/commerce_payment_handler_field_amount.inc',
            4 => 'includes/views/handlers/commerce_payment_handler_field_currency_code.inc',
            5 => 'includes/views/handlers/commerce_payment_handler_field_message.inc',
            6 => 'includes/views/handlers/commerce_payment_handler_field_payment_method.inc',
            7 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link.inc',
            8 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_link_delete.inc',
            9 => 'includes/views/handlers/commerce_payment_handler_field_payment_transaction_operations.inc',
            10 => 'includes/views/handlers/commerce_payment_handler_field_status.inc',
            11 => 'includes/views/handlers/commerce_payment_handler_filter_payment_method.inc',
            12 => 'includes/views/handlers/commerce_payment_handler_filter_payment_transaction_status.inc',
            13 => 'includes/views/handlers/commerce_payment_handler_filter_currency_code.inc',
            14 => 'includes/views/handlers/commerce_payment_handler_field_balance.inc',
            15 => 'tests/commerce_payment.rules.test',
            16 => 'tests/commerce_payment_credit_card.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.14',
      ),
      'commerce_product' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product/commerce_product.module',
        'basename' => 'commerce_product.module',
        'name' => 'commerce_product',
        'info' => 
        array (
          'name' => 'Product',
          'description' => 'Defines the Product entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_product.controller.inc',
            1 => 'includes/views/handlers/commerce_product_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_product_handler_argument_product_id.inc',
            3 => 'includes/views/handlers/commerce_product_handler_field_product.inc',
            4 => 'includes/views/handlers/commerce_product_handler_field_product_type.inc',
            5 => 'includes/views/handlers/commerce_product_handler_field_product_link.inc',
            6 => 'includes/views/handlers/commerce_product_handler_field_product_link_delete.inc',
            7 => 'includes/views/handlers/commerce_product_handler_field_product_link_edit.inc',
            8 => 'includes/views/handlers/commerce_product_handler_field_product_operations.inc',
            9 => 'includes/views/handlers/commerce_product_handler_filter_product_type.inc',
            10 => 'includes/commerce_product.translation_handler.inc',
            11 => 'tests/commerce_product.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7104',
        'version' => '7.x-1.14',
      ),
      'commerce_product_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product/commerce_product_ui.module',
        'basename' => 'commerce_product_ui.module',
        'name' => 'commerce_product_ui',
        'info' => 
        array (
          'name' => 'Product UI',
          'description' => 'Exposes a default UI for Products through product edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_product',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/products/types',
          'files' => 
          array (
            0 => 'tests/commerce_product_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.14',
      ),
      'commerce_product_pricing' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing.module',
        'basename' => 'commerce_product_pricing.module',
        'name' => 'commerce_product_pricing',
        'info' => 
        array (
          'name' => 'Product Pricing',
          'description' => 'Enables Rules based product sell price calculation for dynamic product pricing.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'commerce_product_reference',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.14',
      ),
      'commerce_product_pricing_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product_pricing/commerce_product_pricing_ui.module',
        'basename' => 'commerce_product_pricing_ui.module',
        'name' => 'commerce_product_pricing_ui',
        'info' => 
        array (
          'name' => 'Product Pricing UI',
          'description' => 'Exposes a UI for managing product pricing rules and pre-calculation settings.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'rules_admin',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_price',
            4 => 'commerce_product_pricing',
            5 => 'commerce_product_reference',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/product-pricing',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_product_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/product_reference/commerce_product_reference.module',
        'basename' => 'commerce_product_reference.module',
        'name' => 'commerce_product_reference',
        'info' => 
        array (
          'name' => 'Product Reference',
          'description' => 'Defines a product reference field and default display formatters.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product',
            4 => 'entity',
            5 => 'options',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_is_product_display.inc',
            1 => 'includes/views/handlers/commerce_product_reference_handler_filter_node_type.inc',
            2 => 'includes/views/handlers/commerce_product_reference_handler_filter_product_line_item_type.inc',
            3 => 'tests/commerce_product_reference.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_tax_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/tax/commerce_tax_ui.module',
        'basename' => 'commerce_tax_ui.module',
        'name' => 'commerce_tax_ui',
        'info' => 
        array (
          'name' => 'Tax UI',
          'description' => 'Provides a UI for creating simple tax types and rates.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_tax',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/taxes',
          'files' => 
          array (
            0 => 'tests/commerce_tax_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'version' => '7.x-1.14',
      ),
      'commerce_tax' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/tax/commerce_tax.module',
        'basename' => 'commerce_tax.module',
        'name' => 'commerce_tax',
        'info' => 
        array (
          'name' => 'Tax',
          'description' => 'Define tax rates and configure tax rules for applicability and display.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_line_item',
            2 => 'commerce_price',
            3 => 'commerce_product_pricing',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_customer_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/customer/commerce_customer_ui.module',
        'basename' => 'commerce_customer_ui.module',
        'name' => 'commerce_customer_ui',
        'info' => 
        array (
          'name' => 'Customer UI',
          'description' => 'Exposes a default UI for Customers through profile edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_customer',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/customer-profiles/types',
          'files' => 
          array (
            0 => 'tests/commerce_customer_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_customer' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/customer/commerce_customer.module',
        'basename' => 'commerce_customer.module',
        'name' => 'commerce_customer',
        'info' => 
        array (
          'name' => 'Customer',
          'description' => 'Defines the Customer entity with Address Field integration.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'addressfield',
            1 => 'commerce',
            2 => 'entity',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_customer_profile.controller.inc',
            1 => 'includes/views/handlers/commerce_customer_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile.inc',
            3 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link.inc',
            4 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_delete.inc',
            5 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_link_edit.inc',
            6 => 'includes/views/handlers/commerce_customer_handler_field_customer_profile_type.inc',
            7 => 'includes/views/handlers/commerce_customer_handler_filter_customer_profile_type.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.14',
      ),
      'commerce_price' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/price/commerce_price.module',
        'basename' => 'commerce_price.module',
        'name' => 'commerce_price',
        'info' => 
        array (
          'name' => 'Price',
          'description' => 'Defines the price field and a price alteration system.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'commerce_price.rules.inc',
            1 => 'includes/views/handlers/commerce_price_handler_field_commerce_price.inc',
            2 => 'includes/views/handlers/commerce_price_handler_filter_commerce_price_amount.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.14',
      ),
      'commerce_cart' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/cart/commerce_cart.module',
        'basename' => 'commerce_cart.module',
        'name' => 'commerce_cart',
        'info' => 
        array (
          'name' => 'Cart',
          'description' => 'Implements the shopping cart system and add to cart features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_checkout',
            2 => 'commerce_line_item',
            3 => 'commerce_order',
            4 => 'commerce_product',
            5 => 'commerce_product_pricing',
            6 => 'commerce_product_reference',
            7 => 'entity',
            8 => 'rules',
            9 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_cart_handler_field_add_to_cart_form.inc',
            1 => 'includes/views/handlers/commerce_cart_handler_field_edit_attributes.inc',
            2 => 'includes/views/handlers/commerce_cart_plugin_argument_default_current_cart_order_id.inc',
            3 => 'includes/views/handlers/commerce_cart_handler_area_empty_text.inc',
            4 => 'tests/commerce_cart.test',
            5 => 'plugins/cart_provider/interface.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.14',
      ),
      'commerce_order' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/order/commerce_order.module',
        'basename' => 'commerce_order.module',
        'name' => 'commerce_order',
        'info' => 
        array (
          'name' => 'Order',
          'description' => 'Defines the Order entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_customer',
            2 => 'commerce_line_item',
            3 => 'commerce_price',
            4 => 'entity',
            5 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_order.controller.inc',
            1 => 'includes/views/handlers/commerce_order_handler_area_empty_text.inc',
            2 => 'includes/views/handlers/commerce_order_handler_area_order_total.inc',
            3 => 'includes/views/handlers/commerce_order_handler_argument_order_order_id.inc',
            4 => 'includes/views/handlers/commerce_order_handler_field_order.inc',
            5 => 'includes/views/handlers/commerce_order_handler_field_order_status.inc',
            6 => 'includes/views/handlers/commerce_order_handler_field_order_state.inc',
            7 => 'includes/views/handlers/commerce_order_handler_field_order_type.inc',
            8 => 'includes/views/handlers/commerce_order_handler_field_order_link.inc',
            9 => 'includes/views/handlers/commerce_order_handler_field_order_link_delete.inc',
            10 => 'includes/views/handlers/commerce_order_handler_field_order_link_edit.inc',
            11 => 'includes/views/handlers/commerce_order_handler_field_order_mail.inc',
            12 => 'includes/views/handlers/commerce_order_handler_field_order_operations.inc',
            13 => 'includes/views/handlers/commerce_order_handler_filter_order_status.inc',
            14 => 'includes/views/handlers/commerce_order_handler_filter_order_state.inc',
            15 => 'includes/views/handlers/commerce_order_handler_filter_order_type.inc',
            16 => 'includes/views/handlers/commerce_order_plugin_argument_validate_user.inc',
            17 => 'tests/commerce_order.rules.test',
            18 => 'tests/commerce_order.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7110',
        'version' => '7.x-1.14',
      ),
      'commerce_order_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/order/commerce_order_ui.module',
        'basename' => 'commerce_order_ui.module',
        'name' => 'commerce_order_ui',
        'info' => 
        array (
          'name' => 'Order UI',
          'description' => 'Exposes a default UI for Orders through order edit forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'commerce_order',
            5 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/order',
          'files' => 
          array (
            0 => 'includes/views/handlers/commerce_order_ui_handler_area_view_order_form.inc',
            1 => 'tests/commerce_order_ui.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_line_item_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/line_item/commerce_line_item_ui.module',
        'basename' => 'commerce_line_item_ui.module',
        'name' => 'commerce_line_item_ui',
        'info' => 
        array (
          'name' => 'Line Item UI',
          'description' => 'Exposes a default UI for Line Items through line item type forms and default Views.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'field_ui',
            1 => 'commerce',
            2 => 'commerce_ui',
            3 => 'commerce_line_item',
            4 => 'views',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/line-items',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce_line_item' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/line_item/commerce_line_item.module',
        'basename' => 'commerce_line_item.module',
        'name' => 'commerce_line_item',
        'info' => 
        array (
          'name' => 'Line Item',
          'description' => 'Defines the Line Item entity and associated features.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_price',
            2 => 'entity',
            3 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'includes/commerce_line_item.controller.inc',
            1 => 'includes/views/handlers/commerce_line_item_handler_area_line_item_summary.inc',
            2 => 'includes/views/handlers/commerce_line_item_handler_argument_line_item_line_item_id.inc',
            3 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_title.inc',
            4 => 'includes/views/handlers/commerce_line_item_handler_field_line_item_type.inc',
            5 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_is_referenced.inc',
            6 => 'includes/views/handlers/commerce_line_item_handler_filter_line_item_type.inc',
            7 => 'includes/views/handlers/commerce_line_item_handler_field_edit_quantity.inc',
            8 => 'includes/views/handlers/commerce_line_item_handler_field_edit_delete.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7101',
        'version' => '7.x-1.14',
      ),
      'commerce_checkout' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/modules/checkout/commerce_checkout.module',
        'basename' => 'commerce_checkout.module',
        'name' => 'commerce_checkout',
        'info' => 
        array (
          'name' => 'Checkout',
          'description' => 'Enable checkout as a multi-step form with customizable checkout pages.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
            1 => 'commerce_ui',
            2 => 'commerce_order',
            3 => 'entity',
            4 => 'rules',
          ),
          'core' => '7.x',
          'configure' => 'admin/commerce/config/checkout',
          'files' => 
          array (
            0 => 'tests/commerce_checkout.test',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.14',
      ),
      'commerce_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/commerce_ui.module',
        'basename' => 'commerce_ui.module',
        'name' => 'commerce_ui',
        'info' => 
        array (
          'name' => 'Commerce UI',
          'description' => 'Defines menu items common to the various Drupal Commerce UI modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'commerce',
          ),
          'core' => '7.x',
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.14',
      ),
      'commerce' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/commerce/commerce.module',
        'basename' => 'commerce.module',
        'name' => 'commerce',
        'info' => 
        array (
          'name' => 'Commerce',
          'description' => 'Defines features and functions common to the Commerce modules. Must be enabled to uninstall other Commerce modules.',
          'package' => 'Commerce',
          'dependencies' => 
          array (
            0 => 'system',
            1 => 'entity',
            2 => 'rules',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tests/commerce_base.test',
            1 => 'includes/commerce.controller.inc',
          ),
          'version' => '7.x-1.14',
          'project' => 'commerce',
          'datestamp' => '1510870110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.14',
      ),
      'domain_menu_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain_menu_access/domain_menu_access.module',
        'basename' => 'domain_menu_access.module',
        'name' => 'domain_menu_access',
        'info' => 
        array (
          'name' => 'Domain Menu Access',
          'description' => 'Allows restricting access to menu items per domain.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
          ),
          'core' => '7.x',
          'version' => '7.x-1.3',
          'project' => 'domain_menu_access',
          'datestamp' => '1519215487',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.3',
      ),
      'fontsquirrel' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontsquirrel/fontsquirrel.module',
        'basename' => 'fontsquirrel.module',
        'name' => 'fontsquirrel',
        'info' => 
        array (
          'name' => 'Font Squirrel API',
          'description' => '@font-your-face provider with Font Squirrel fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'google_fonts_api' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/google_fonts_api/google_fonts_api.module',
        'basename' => 'google_fonts_api.module',
        'name' => 'google_fonts_api',
        'info' => 
        array (
          'name' => 'Google Fonts API',
          'description' => '@font-your-face provider with Google fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/google_fonts_api.views_default.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-2.8',
      ),
      'fontyourface_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontyourface_ui/fontyourface_ui.module',
        'basename' => 'fontyourface_ui.module',
        'name' => 'fontyourface_ui',
        'info' => 
        array (
          'name' => '@font-your-face UI',
          'description' => 'Administrative interface for managing fonts.',
          'package' => '@font-your-face',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'views',
          ),
          'configure' => 'admin/config/user-interface/fontyourface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/fontyourface.views_default.inc',
            1 => 'views/views_handler_field_fontyourface_font.inc',
            2 => 'views/views_handler_field_fontyourface_foundry.inc',
            3 => 'views/views_handler_field_fontyourface_license.inc',
            4 => 'views/views_handler_field_fontyourface_provider.inc',
            5 => 'views/views_handler_field_fontyourface_tag_font_tid.inc',
            6 => 'views/views_handler_filter_tag_font_tid.inc',
            7 => 'views/views_handler_relationship_fontyourface_tag.inc',
            8 => 'views/views_handler_field_fontyourface_preview.inc',
            9 => 'views/views_handler_field_fontyourface_enable_disable.inc',
            10 => 'views/views_handler_field_fontyourface_enabled_yes_no.inc',
            11 => 'views/views_handler_filter_fontyourface_provider.inc',
            12 => 'views/views_handler_filter_fontyourface_foundry.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'fonts_com' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fonts_com/fonts_com.module',
        'basename' => 'fonts_com.module',
        'name' => 'fonts_com',
        'info' => 
        array (
          'name' => 'Fonts.com',
          'description' => '@font-your-face provider of fonts from Fonts.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'api.inc',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'font_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/font_reference/font_reference.module',
        'basename' => 'font_reference.module',
        'name' => 'font_reference',
        'info' => 
        array (
          'name' => 'Font Reference',
          'description' => 'Defines a field type for referencing a font from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'field',
            2 => 'options',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'typekit_api' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/typekit_api/typekit_api.module',
        'basename' => 'typekit_api.module',
        'name' => 'typekit_api',
        'info' => 
        array (
          'name' => 'Typekit API',
          'description' => '@font-your-face provider with Typekit.com fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'fontdeck' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontdeck/fontdeck.module',
        'basename' => 'fontdeck.module',
        'name' => 'fontdeck',
        'info' => 
        array (
          'name' => 'Fontdeck',
          'description' => '@font-your-face provider of fonts from Fontdeck.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'fontdeck.install',
            1 => 'fontdeck.module',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'edge_fonts' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/edge_fonts/edge_fonts.module',
        'basename' => 'edge_fonts.module',
        'name' => 'edge_fonts',
        'info' => 
        array (
          'name' => 'Edge Fonts',
          'description' => '@font-your-face provider for Edge Fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'fontyourface_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/fontyourface_wysiwyg/fontyourface_wysiwyg.module',
        'basename' => 'fontyourface_wysiwyg.module',
        'name' => 'fontyourface_wysiwyg',
        'info' => 
        array (
          'name' => 'WYSIWYG for @font-your-face',
          'description' => 'Adds list of enabled fonts to WYSIWYG.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'wysiwyg',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface_wysiwyg.module',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.8',
      ),
      'local_fonts' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/modules/local_fonts/local_fonts.module',
        'basename' => 'local_fonts.module',
        'name' => 'local_fonts',
        'info' => 
        array (
          'name' => 'Local Fonts',
          'description' => '@font-your-face provider with fonts installed locally on the Drupal server.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'version' => '7.x-2.8',
      ),
      'fontyourface' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/fontyourface/fontyourface.module',
        'basename' => 'fontyourface.module',
        'name' => 'fontyourface',
        'info' => 
        array (
          'name' => '@font-your-face',
          'description' => 'Manages web fonts.',
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface.test',
          ),
          'version' => '7.x-2.8',
          'project' => 'fontyourface',
          'datestamp' => '1367195415',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-2.8',
      ),
      'user_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'references_uuid' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/references_uuid/references_uuid.module',
        'basename' => 'references_uuid.module',
        'name' => 'references_uuid',
        'info' => 
        array (
          'name' => 'References UUID',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'references',
            1 => 'uuid',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'node_reference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.2',
      ),
      'references' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'references',
          'datestamp' => '1492534745',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.2',
      ),
      'workbench_media' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_media/workbench_media.module',
        'basename' => 'workbench_media.module',
        'name' => 'workbench_media',
        'info' => 
        array (
          'name' => 'Workbench Media',
          'description' => 'Media and File features for the Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'workbench',
            1 => 'media',
          ),
          'version' => '7.x-1.1',
          'project' => 'workbench_media',
          'datestamp' => '1346858332',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'filefield_sources' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/filefield_sources/filefield_sources.module',
        'basename' => 'filefield_sources.module',
        'name' => 'filefield_sources',
        'info' => 
        array (
          'name' => 'File Field Sources',
          'description' => 'Extends File fields to allow referencing of existing files, remote files, and server files.',
          'dependencies' => 
          array (
            0 => 'file',
            1 => 'system (>=7.36)',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-1.11',
          'project' => 'filefield_sources',
          'datestamp' => '1517969885',
          'php' => '5.2.4',
        ),
        'schema_version' => '6001',
        'version' => '7.x-1.11',
      ),
      'entityreference_behavior_example' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entityreference/examples/entityreference_behavior_example/entityreference_behavior_example.module',
        'basename' => 'entityreference_behavior_example.module',
        'name' => 'entityreference_behavior_example',
        'info' => 
        array (
          'name' => 'Entity Reference Behavior Example',
          'description' => 'Provides some example code for implementing Entity Reference behaviors.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'entityreference',
          ),
          'version' => '7.x-1.5',
          'project' => 'entityreference',
          'datestamp' => '1502895850',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'entityreference' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/entityreference/entityreference.module',
        'basename' => 'entityreference.module',
        'name' => 'entityreference',
        'info' => 
        array (
          'name' => 'Entity Reference',
          'description' => 'Provides a field that can reference other entities.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity',
            1 => 'ctools',
          ),
          'test_dependencies' => 
          array (
            0 => 'feeds',
            1 => 'views',
          ),
          'files' => 
          array (
            0 => 'entityreference.migrate.inc',
            1 => 'plugins/selection/abstract.inc',
            2 => 'plugins/selection/views.inc',
            3 => 'plugins/behavior/abstract.inc',
            4 => 'views/entityreference_plugin_display.inc',
            5 => 'views/entityreference_plugin_style.inc',
            6 => 'views/entityreference_plugin_row_fields.inc',
            7 => 'tests/entityreference.handlers.test',
            8 => 'tests/entityreference.taxonomy.test',
            9 => 'tests/entityreference.admin.test',
            10 => 'tests/entityreference.feeds.test',
            11 => 'tests/entityreference.entity_translation.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'entityreference',
          'datestamp' => '1502895850',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'version' => '7.x-1.5',
      ),
      'transliteration' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '7.x',
          'configure' => 'admin/config/media/file-system',
          'version' => '7.x-3.2',
          'project' => 'transliteration',
          'datestamp' => '1395079444',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.2',
      ),
      'workbench_files' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_files/workbench_files.module',
        'basename' => 'workbench_files.module',
        'name' => 'workbench_files',
        'info' => 
        array (
          'name' => 'Workbench Files',
          'description' => 'File-related features for the Workbench editorial suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'workbench',
          ),
          'version' => '7.x-1.0',
          'project' => 'workbench_files',
          'datestamp' => '1314385328',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.0',
      ),
      'draggableviews_book' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/draggableviews/draggableviews_book/draggableviews_book.module',
        'basename' => 'draggableviews_book.module',
        'name' => 'draggableviews_book',
        'info' => 
        array (
          'name' => 'Draggableviews Book',
          'description' => 'Reorder books',
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'draggableviews_book_views_handler_argument.inc',
          ),
          'dependencies' => 
          array (
            0 => 'draggableviews',
            1 => 'book',
          ),
          'version' => '7.x-2.1',
          'project' => 'draggableviews',
          'datestamp' => '1425397028',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.1',
      ),
      'draggableviews' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/draggableviews/draggableviews.module',
        'basename' => 'draggableviews.module',
        'name' => 'draggableviews',
        'info' => 
        array (
          'name' => 'Draggableviews',
          'description' => 'Makes Views draggable',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'entity',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'handlers/draggableviews_handler.inc',
            1 => 'handlers/draggableviews_hierarchy_handler.inc',
            2 => 'views/draggableviews_handler_field_draggable.inc',
            3 => 'views/draggableviews_handler_sort.inc',
            4 => 'views/draggableviews_join_handler.inc',
            5 => 'test/draggableviews.test',
            6 => 'handlers/draggableviews_handler_native.inc',
            7 => 'handlers/draggableviews_handler_fieldapi.inc',
            8 => 'handlers/draggableviews_hierarchy_handler_native.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'draggableviews',
          'datestamp' => '1425397028',
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.1',
      ),
      'domain_views' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/domain_views/domain_views.module',
        'basename' => 'domain_views.module',
        'name' => 'domain_views',
        'info' => 
        array (
          'name' => 'Domain Views',
          'description' => 'Provides Views integration for the Domain Access module.',
          'package' => 'Domain Access',
          'dependencies' => 
          array (
            0 => 'domain',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'domain_views.module',
            1 => 'domain_views.views.inc',
            2 => 'includes/domain_views_handler_argument_domain_access_gid.inc',
            3 => 'includes/domain_views_handler_field_domain_id.inc',
            4 => 'includes/domain_views_handler_field_domain_sitename.inc',
            5 => 'includes/domain_views_handler_field_domain_subdomain.inc',
            6 => 'includes/domain_views_handler_field_domain_access_sitename.inc',
            7 => 'includes/domain_views_handler_filter_domain_access_current_all.inc',
            8 => 'includes/domain_views_handler_filter_domain_access_gid.inc',
            9 => 'includes/domain_views_handler_filter_domain_access_realm.inc',
            10 => 'includes/domain_views_handler_filter_domain_domain_id.inc',
            11 => 'includes/domain_views_handler_filter_domain_machine_name.inc',
            12 => 'includes/domain_views_plugin_access.inc',
            13 => 'includes/domain_views_plugin_argument_default_current.inc',
            14 => 'includes/domain_views_plugin_cache_time.inc',
          ),
          'version' => '7.x-1.5',
          'project' => 'domain_views',
          'datestamp' => '1348846266',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.5',
      ),
      'delta_color' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta_color/delta_color.module',
        'basename' => 'delta_color.module',
        'name' => 'delta_color',
        'info' => 
        array (
          'name' => 'Delta Color',
          'description' => 'Makes the color module available for Delta templates.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'dependencies' => 
          array (
            0 => 'delta',
            1 => 'color',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta11',
      ),
      'delta_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta_ui/delta_ui.module',
        'basename' => 'delta_ui.module',
        'name' => 'delta_ui',
        'info' => 
        array (
          'name' => 'Delta UI',
          'description' => 'The Delta UI provides a user interface to build and edit the contextual theme settings provided by the Delta module.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'delta',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta11',
      ),
      'delta_blocks' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta_blocks/delta_blocks.module',
        'basename' => 'delta_blocks.module',
        'name' => 'delta_blocks',
        'info' => 
        array (
          'name' => 'Delta Blocks',
          'description' => 'Exposes a number of core Drupal elements as blocks.',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'package' => 'Theme Tools',
          'project' => 'delta',
          'datestamp' => '1343161343',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.0-beta11',
      ),
      'delta' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/delta/delta.module',
        'basename' => 'delta.module',
        'name' => 'delta',
        'info' => 
        array (
          'name' => 'Delta API',
          'description' => 'The Delta module is an advanced manipulation of the Theme Settings API to allow for customization/configuration of theme settings based on node types, context, or groups of paths.',
          'package' => 'Theme Tools',
          'core' => '7.x',
          'version' => '7.x-3.0-beta11',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'project' => 'delta',
          'datestamp' => '1343161343',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'version' => '7.x-3.0-beta11',
      ),
      'scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/scheduler/scheduler.module',
        'basename' => 'scheduler.module',
        'name' => 'scheduler',
        'info' => 
        array (
          'name' => 'Scheduler',
          'description' => 'This module allows nodes to be published and unpublished on specified dates and time.',
          'core' => '7.x',
          'configure' => 'admin/config/content/scheduler',
          'files' => 
          array (
            0 => 'scheduler.install',
            1 => 'scheduler.module',
            2 => 'scheduler.test',
            3 => 'scheduler.views.inc',
            4 => 'scheduler_handler_field_scheduler_countdown.inc',
            5 => 'tests/scheduler_api.test',
          ),
          'test_dependencies' => 
          array (
            0 => 'date',
          ),
          'version' => '7.x-1.5',
          'project' => 'scheduler',
          'datestamp' => '1469372941',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7103',
        'version' => '7.x-1.5',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.handler.inc',
            6 => 'includes/rules_scheduler.views_default.inc',
            7 => 'includes/rules_scheduler.views.inc',
            8 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'version' => '7.x-2.11',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.event.inc',
            5 => 'includes/rules.processor.inc',
            6 => 'includes/rules.plugins.inc',
            7 => 'includes/rules.state.inc',
            8 => 'includes/rules.dispatcher.inc',
            9 => 'modules/node.eval.inc',
            10 => 'modules/php.eval.inc',
            11 => 'modules/rules_core.eval.inc',
            12 => 'modules/system.eval.inc',
            13 => 'ui/ui.controller.inc',
            14 => 'ui/ui.core.inc',
            15 => 'ui/ui.data.inc',
            16 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.11',
          'project' => 'rules',
          'datestamp' => '1526653388',
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'version' => '7.x-2.11',
      ),
      'feeds_news' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds_news/feeds_news.module',
        'basename' => 'feeds_news.module',
        'name' => 'feeds_news',
        'info' => 
        array (
          'name' => 'Feeds News',
          'description' => 'A news aggregator built with feeds, creates nodes from imported feed items. With OPML import.',
          'core' => '7.x',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
            2 => 'feeds',
            3 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
              1 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'feeds_importer' => 
            array (
              0 => 'feed',
              1 => 'opml',
            ),
            'field_base' => 
            array (
              0 => 'field_feed_item_description',
            ),
            'field_instance' => 
            array (
              0 => 'node-feed_item-field_feed_item_description',
            ),
            'node' => 
            array (
              0 => 'feed',
              1 => 'feed_item',
            ),
            'views_view' => 
            array (
              0 => 'feeds_defaults_feed_items',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_news.module',
            1 => 'feeds_news.test',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta4',
      ),
      'feeds_import' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds_import/feeds_import.module',
        'basename' => 'feeds_import.module',
        'name' => 'feeds_import',
        'info' => 
        array (
          'name' => 'Feeds Import',
          'description' => 'An example of a node importer and a user importer.',
          'core' => '7.x',
          'package' => 'Feeds',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'feeds',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'feeds:feeds_importer_default:1',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'feeds_importer' => 
            array (
              0 => 'node',
              1 => 'user',
            ),
          ),
          'files' => 
          array (
            0 => 'feeds_import.test',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0-beta4',
      ),
      'feeds_ui' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds_ui/feeds_ui.module',
        'basename' => 'feeds_ui.module',
        'name' => 'feeds_ui',
        'info' => 
        array (
          'name' => 'Feeds Admin UI',
          'description' => 'Administrative UI for Feeds module.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'feeds',
          ),
          'configure' => 'admin/structure/feeds',
          'files' => 
          array (
            0 => 'feeds_ui.test',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.0-beta4',
      ),
      'feeds' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/feeds/feeds.module',
        'basename' => 'feeds.module',
        'name' => 'feeds',
        'info' => 
        array (
          'name' => 'Feeds',
          'description' => 'Aggregates RSS/Atom/RDF feeds, imports CSV files and more.',
          'package' => 'Feeds',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'job_scheduler',
          ),
          'test_dependencies' => 
          array (
            0 => 'date:date',
            1 => 'entity_translation:entity_translation',
            2 => 'feeds_xpathparser:feeds_xpathparser',
            3 => 'i18n:i18n_taxonomy',
            4 => 'link:link',
            5 => 'rules:rules',
            6 => 'variable:variable',
          ),
          'files' => 
          array (
            0 => 'includes/FeedsConfigurable.inc',
            1 => 'includes/FeedsHTTPCache.inc',
            2 => 'includes/FeedsHTTPCacheItem.inc',
            3 => 'includes/FeedsImporter.inc',
            4 => 'includes/FeedsSource.inc',
            5 => 'libraries/ParserCSV.inc',
            6 => 'libraries/http_request.inc',
            7 => 'libraries/PuSHSubscriber.inc',
            8 => 'plugins/FeedsCSVParser.inc',
            9 => 'plugins/FeedsFetcher.inc',
            10 => 'plugins/FeedsFileFetcher.inc',
            11 => 'plugins/FeedsHTTPFetcher.inc',
            12 => 'plugins/FeedsNodeProcessor.inc',
            13 => 'plugins/FeedsOPMLParser.inc',
            14 => 'plugins/FeedsParser.inc',
            15 => 'plugins/FeedsPlugin.inc',
            16 => 'plugins/FeedsProcessor.inc',
            17 => 'plugins/FeedsSimplePieParser.inc',
            18 => 'plugins/FeedsSitemapParser.inc',
            19 => 'plugins/FeedsSyndicationParser.inc',
            20 => 'plugins/FeedsTermProcessor.inc',
            21 => 'plugins/FeedsUserProcessor.inc',
            22 => 'tests/feeds.test',
            23 => 'tests/common_syndication_parser.test',
            24 => 'tests/feeds_content_type.test',
            25 => 'tests/feeds_date_time.test',
            26 => 'tests/feeds_entity.test',
            27 => 'tests/feeds_hooks.test',
            28 => 'tests/feeds_mapper_date.test',
            29 => 'tests/feeds_mapper_date_multiple.test',
            30 => 'tests/feeds_mapper_field.test',
            31 => 'tests/feeds_mapper_file.test',
            32 => 'tests/feeds_mapper_hooks.test',
            33 => 'tests/feeds_mapper_link.test',
            34 => 'tests/feeds_mapper_list.test',
            35 => 'tests/feeds_mapper_multilingual_fields.test',
            36 => 'tests/feeds_mapper_path.test',
            37 => 'tests/feeds_mapper_profile.test',
            38 => 'tests/feeds_mapper_unique.test',
            39 => 'tests/feeds_mapper.test',
            40 => 'tests/feeds_mapper_config.test',
            41 => 'tests/feeds_fetcher_file.test',
            42 => 'tests/feeds_mapper_format_config.test',
            43 => 'tests/feeds_fetcher_http.test',
            44 => 'tests/feeds_i18n.test',
            45 => 'tests/feeds_i18n_node.test',
            46 => 'tests/feeds_i18n_taxonomy.test',
            47 => 'tests/feeds_install.test',
            48 => 'tests/feeds_parser_csv.test',
            49 => 'tests/feeds_parser_sitemap.test',
            50 => 'tests/feeds_parser_syndication.test',
            51 => 'tests/feeds_processor_node.test',
            52 => 'tests/feeds_processor_term.test',
            53 => 'tests/feeds_processor_user.test',
            54 => 'tests/feeds_push.test',
            55 => 'tests/feeds_rules.test',
            56 => 'tests/feeds_scheduler.test',
            57 => 'tests/feeds_mapper_link.test',
            58 => 'tests/feeds_mapper_summary.test',
            59 => 'tests/feeds_mapper_taxonomy.test',
            60 => 'tests/feeds_tokens.test',
            61 => 'tests/FeedsEnclosureTest.test',
            62 => 'tests/FeedsFetcherResultTest.test',
            63 => 'tests/FeedsHTTPCacheTest.test',
            64 => 'tests/FeedsSourceTest.test',
            65 => 'tests/http_request.test',
            66 => 'tests/parser_csv.test',
            67 => 'views/feeds_views_handler_argument_importer_id.inc',
            68 => 'views/feeds_views_handler_field_importer_name.inc',
            69 => 'views/feeds_views_handler_field_log_message.inc',
            70 => 'views/feeds_views_handler_field_severity.inc',
            71 => 'views/feeds_views_handler_field_source.inc',
            72 => 'views/feeds_views_handler_filter_severity.inc',
            73 => 'views/feeds_views_plugin_argument_validate_feed_nid.inc',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'feeds',
          'datestamp' => '1506257048',
          'php' => '5.2.4',
        ),
        'schema_version' => '7213',
        'version' => '7.x-2.0-beta4',
      ),
      'varnish' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/varnish/varnish.module',
        'basename' => 'varnish.module',
        'name' => 'varnish',
        'info' => 
        array (
          'name' => 'Varnish',
          'description' => 'Provides integration with the Varnish HTTP accelerator.',
          'core' => '7.x',
          'configure' => 'admin/config/development/varnish',
          'package' => 'Caching',
          'files' => 
          array (
            0 => 'varnish.cache.inc',
            1 => 'varnish.test',
          ),
          'version' => '7.x-1.9',
          'project' => 'varnish',
          'datestamp' => '1532082190',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.9',
      ),
      'job_scheduler_trigger' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/job_scheduler/modules/job_scheduler_trigger/job_scheduler_trigger.module',
        'basename' => 'job_scheduler_trigger.module',
        'name' => 'job_scheduler_trigger',
        'info' => 
        array (
          'name' => 'Job Scheduler Trigger',
          'description' => 'Creates scheduler triggers that fire up at certain days, times',
          'core' => '7.x',
          '# @codingStandardsIgnoreLine
php' => '5.2',
          'dependencies' => 
          array (
            0 => 'job_scheduler',
            1 => 'trigger',
          ),
          'configure' => 'admin/config/system/job_scheduler',
          'version' => '7.x-2.0',
          'project' => 'job_scheduler',
          'datestamp' => '1518514085',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.0',
      ),
      'job_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/job_scheduler/job_scheduler.module',
        'basename' => 'job_scheduler.module',
        'name' => 'job_scheduler',
        'info' => 
        array (
          'name' => 'Job Scheduler',
          'description' => 'Scheduler API',
          '# @codingStandardsIgnoreLine
files' => 
          array (
            0 => 'job_scheduler.module',
            1 => 'job_scheduler.install',
          ),
          'files' => 
          array (
            0 => 'JobScheduler.inc',
            1 => 'JobSchedulerCronTab.inc',
          ),
          'core' => '7.x',
          '# @codingStandardsIgnoreLine
php' => '5.2',
          'version' => '7.x-2.0',
          'project' => 'job_scheduler',
          'datestamp' => '1518514085',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-2.0',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'wysiwyg',
          'datestamp' => '1524085389',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7205',
        'version' => '7.x-2.5',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version-dependent and shared usage of external libraries.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'system (>=7.11)',
          ),
          'files' => 
          array (
            0 => 'tests/LibrariesAdminWebTest.test',
            1 => 'tests/LibrariesLoadWebTest.test',
            2 => 'tests/LibrariesUnitTest.test',
            3 => 'tests/LibrariesWebTestBase.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'libraries',
          'datestamp' => '1538770685',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.5',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
            1 => 'includes/MediaInternetBaseHandler.inc',
            2 => 'includes/MediaInternetFileHandler.inc',
            3 => 'includes/MediaInternetNoHandlerException.inc',
            4 => 'includes/MediaInternetValidationException.inc',
            5 => 'tests/media_internet.test',
          ),
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'version' => '7.x-2.21',
      ),
      'media_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_wysiwyg/media_wysiwyg.module',
        'basename' => 'media_wysiwyg.module',
        'name' => 'media_wysiwyg',
        'info' => 
        array (
          'name' => 'Media WYSIWYG',
          'description' => 'Adds support for embedding media using client-side WYSIWYG editors.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'test_dependencies' => 
          array (
            0 => 'ckeditor',
            1 => 'token',
            2 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'media_wysiwyg.test',
            1 => 'tests/media_wysiwyg.file_usage.test',
            2 => 'tests/media_wysiwyg.macro.test',
            3 => 'tests/media_wysiwyg.paragraph_fix_filter.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7207',
        'version' => '7.x-2.21',
      ),
      'media_bulk_upload' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_bulk_upload/media_bulk_upload.module',
        'basename' => 'media_bulk_upload.module',
        'name' => 'media_bulk_upload',
        'info' => 
        array (
          'name' => 'Media Bulk Upload',
          'description' => 'Adds support for uploading multiple files at a time.',
          'package' => 'Media',
          'core' => '7.x',
          'configure' => 'admin/config/media/browser',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'multiform (>= 7.x-1.3)',
            2 => 'plupload',
          ),
          'test_dependencies' => 
          array (
            0 => 'multiform',
            1 => 'plupload',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserBulkUpload.inc',
            1 => 'tests/media_bulk_upload.test',
          ),
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.21',
      ),
      'mediafield' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.21',
      ),
      'media_wysiwyg_view_mode' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/modules/media_wysiwyg_view_mode/media_wysiwyg_view_mode.module',
        'basename' => 'media_wysiwyg_view_mode.module',
        'name' => 'media_wysiwyg_view_mode',
        'info' => 
        array (
          'name' => 'Media WYSIWYG View Mode',
          'description' => 'DEPRECATED, this folder is only here so that the module can be uninstalled.',
          'package' => 'Media',
          'core' => '7.x',
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.21',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
            1 => 'image',
            2 => 'views',
          ),
          'test_dependencies' => 
          array (
            0 => 'token',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserUpload.inc',
            4 => 'includes/MediaBrowserView.inc',
            5 => 'includes/MediaEntityTranslationHandler.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
          ),
          'configure' => 'admin/config/media/browser',
          'version' => '7.x-2.21',
          'project' => 'media',
          'datestamp' => '1540363086',
          'php' => '5.2.4',
        ),
        'schema_version' => '7227',
        'version' => '7.x-2.21',
      ),
      'gmap_fields' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_fields/gmap_fields.module',
        'basename' => 'gmap_fields.module',
        'name' => 'gmap_fields',
        'info' => 
        array (
          'name' => 'GMap Fields',
          'description' => 'GMap field types, currently only a marker field.',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'gmap',
            2 => 'options',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'gmap_style_bubbles' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_style_bubbles/gmap_style_bubbles.module',
        'basename' => 'gmap_style_bubbles.module',
        'name' => 'gmap_style_bubbles',
        'info' => 
        array (
          'name' => 'Gmap Style Bubbles',
          'description' => 'A module that lets you add more styles to your gmap popup bubbles.',
          'package' => 'Location',
          'core' => '7.x',
          'project' => 'gmap',
          'dependencies' => 
          array (
            0 => 'gmap',
            1 => 'libraries (2.x)',
          ),
          'version' => '7.x-2.11',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'location_gmap_find_address' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/location_gmap_find_address/location_gmap_find_address.module',
        'basename' => 'location_gmap_find_address.module',
        'name' => 'location_gmap_find_address',
        'info' => 
        array (
          'name' => 'Location + Gmap \'Find Address\' button',
          'description' => 'Adds a \'Find Address\' button to all location fields that use gmap',
          'core' => '7.x',
          'package' => 'Location',
          'dependencies' => 
          array (
            0 => 'location_cck',
            1 => 'location',
            2 => 'gmap',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-2.11',
      ),
      'gmap_location' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_location.module',
        'basename' => 'gmap_location.module',
        'name' => 'gmap_location',
        'info' => 
        array (
          'name' => 'GMap Location',
          'description' => 'Display location.module information on Google Maps',
          'package' => 'Location',
          'core' => '7.x',
          'configure' => 'admin/config/services/gmap_location',
          'files' => 
          array (
            0 => 'gmap_location.module',
          ),
          'dependencies' => 
          array (
            0 => 'gmap',
            1 => 'location',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => '5102',
        'version' => '7.x-2.11',
      ),
      'gmap_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_taxonomy.module',
        'basename' => 'gmap_taxonomy.module',
        'name' => 'gmap_taxonomy',
        'info' => 
        array (
          'name' => 'GMap Taxonomy Markers',
          'description' => 'Taxonomy based markers',
          'package' => 'Location',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'gmap',
          ),
          'files' => 
          array (
            0 => 'gmap_taxonomy.module',
            1 => 'gmap_taxonomy.views.inc',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.11',
      ),
      'gmap_macro_builder' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap_macro_builder.module',
        'basename' => 'gmap_macro_builder.module',
        'name' => 'gmap_macro_builder',
        'info' => 
        array (
          'name' => 'GMap Macro Builder',
          'description' => 'UI for building GMap macros.',
          'package' => 'Location',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'gmap',
          ),
          'files' => 
          array (
            0 => 'gmap_macro_builder.module',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'php' => '5.2.4',
        ),
        'schema_version' => '6100',
        'version' => '7.x-2.11',
      ),
      'gmap' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/gmap/gmap.module',
        'basename' => 'gmap.module',
        'name' => 'gmap',
        'info' => 
        array (
          'name' => 'GMap',
          'description' => 'Views plugins to show Google Maps from entities.',
          'core' => '7.x',
          'package' => 'Location',
          'configure' => 'admin/config/services/gmap',
          'files' => 
          array (
            0 => 'gmap_plugin_style_gmap.inc',
            1 => 'gmap_plugin_style_gmapextended.inc',
            2 => 'tests/gmap.test',
            3 => 'tests/oopmigration.test',
            4 => 'lib/Drupal/gmap/GmapDefaults.php',
            5 => 'lib/Drupal/gmap/GmapPolylineToolbox.php',
            6 => 'lib/Drupal/gmap/GmapMacroToolbox.php',
            7 => 'tests/inc/gmap_polyutil.inc',
            8 => 'tests/inc/gmap_defaults.inc',
          ),
          'version' => '7.x-2.11',
          'project' => 'gmap',
          'datestamp' => '1457698170',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.11',
      ),
      'nice_menus' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/nice_menus/nice_menus.module',
        'basename' => 'nice_menus.module',
        'name' => 'nice_menus',
        'info' => 
        array (
          'name' => 'Nice Menus',
          'description' => 'CSS/jQuery drop-down, drop-right and drop-left menus to be placed in blocks',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/user-interface/nice_menus',
          'version' => '7.x-2.5',
          'project' => 'nice_menus',
          'datestamp' => '1373943668',
          'php' => '5.2.4',
        ),
        'schema_version' => '6002',
        'version' => '7.x-2.5',
      ),
      'colorbox' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/colorbox/colorbox.module',
        'basename' => 'colorbox.module',
        'name' => 'colorbox',
        'info' => 
        array (
          'name' => 'Colorbox',
          'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
          'dependencies' => 
          array (
            0 => 'libraries (>=2.x)',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/media/colorbox',
          'files' => 
          array (
            0 => 'views/colorbox_handler_field_colorbox.inc',
          ),
          'version' => '7.x-2.13',
          'project' => 'colorbox',
          'datestamp' => '1491291489',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'version' => '7.x-2.13',
      ),
      'role_delegation' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/role_delegation/role_delegation.module',
        'basename' => 'role_delegation.module',
        'name' => 'role_delegation',
        'info' => 
        array (
          'name' => 'Role delegation',
          'description' => 'Allows site administrators to grant some roles the authority to assign selected roles to users.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'role_delegation.module',
            1 => 'role_delegation.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'role_delegation',
          'datestamp' => '1308565019',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.1',
      ),
      'module_filter' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/module_filter/module_filter.module',
        'basename' => 'module_filter.module',
        'name' => 'module_filter',
        'info' => 
        array (
          'name' => 'Module filter',
          'description' => 'Filter the modules list.',
          'core' => '7.x',
          'package' => 'Administration',
          'files' => 
          array (
            0 => 'module_filter.install',
            1 => 'module_filter.module',
            2 => 'module_filter.admin.inc',
            3 => 'module_filter.theme.inc',
            4 => 'css/module_filter.css',
            5 => 'css/module_filter_tab.css',
            6 => 'js/module_filter.js',
            7 => 'js/module_filter_tab.js',
          ),
          'configure' => 'admin/config/user-interface/modulefilter',
          'version' => '7.x-2.1',
          'project' => 'module_filter',
          'datestamp' => '1497029349',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'version' => '7.x-2.1',
      ),
      'flag_bookmark' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flag/flag_bookmark/flag_bookmark.module',
        'basename' => 'flag_bookmark.module',
        'name' => 'flag_bookmark',
        'info' => 
        array (
          'name' => 'Flag Bookmark',
          'description' => 'Provides an example bookmark flag and supporting views.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'files' => 
          array (
            0 => 'plugins/flag_bookmark_plugin_validate_user.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'flag',
          'datestamp' => '1474619065',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-3.9',
      ),
      'flag_actions' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flag/flag_actions.module',
        'basename' => 'flag_actions.module',
        'name' => 'flag_actions',
        'info' => 
        array (
          'name' => 'Flag actions',
          'description' => 'Execute actions on Flag events.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'flag',
          ),
          'package' => 'Flags',
          'configure' => 'admin/structure/flags/actions',
          'version' => '7.x-3.9',
          'project' => 'flag',
          'datestamp' => '1474619065',
          'php' => '5.2.4',
        ),
        'schema_version' => '6200',
        'version' => '7.x-3.9',
      ),
      'flag' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/flag/flag.module',
        'basename' => 'flag.module',
        'name' => 'flag',
        'info' => 
        array (
          'name' => 'Flag',
          'description' => 'Create customized flags that users can set on entities.',
          'core' => '7.x',
          'package' => 'Flags',
          'configure' => 'admin/structure/flags',
          'test_dependencies' => 
          array (
            0 => 'token',
            1 => 'rules',
          ),
          'files' => 
          array (
            0 => 'includes/flag/flag_flag.inc',
            1 => 'includes/flag/flag_entity.inc',
            2 => 'includes/flag/flag_node.inc',
            3 => 'includes/flag/flag_comment.inc',
            4 => 'includes/flag/flag_user.inc',
            5 => 'includes/flag.cookie_storage.inc',
            6 => 'includes/flag.entity.inc',
            7 => 'flag.rules.inc',
            8 => 'includes/views/flag_handler_argument_entity_id.inc',
            9 => 'includes/views/flag_handler_field_ops.inc',
            10 => 'includes/views/flag_handler_field_flagged.inc',
            11 => 'includes/views/flag_handler_filter_flagged.inc',
            12 => 'includes/views/flag_handler_sort_flagged.inc',
            13 => 'includes/views/flag_handler_relationships.inc',
            14 => 'includes/views/flag_plugin_argument_validate_flaggability.inc',
            15 => 'tests/flag.test',
          ),
          'version' => '7.x-3.9',
          'project' => 'flag',
          'datestamp' => '1474619065',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7306',
        'version' => '7.x-3.9',
      ),
      'workbench_access' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/workbench_access/workbench_access.module',
        'basename' => 'workbench_access.module',
        'name' => 'workbench_access',
        'info' => 
        array (
          'name' => 'Workbench Access',
          'description' => 'Extensible editorial access for the Workbench suite.',
          'package' => 'Workbench',
          'core' => '7.x',
          'configure' => 'admin/config/workbench/access',
          'files' => 
          array (
            0 => 'includes/workbench_access_handler_field_edit_node.inc',
            1 => 'includes/workbench_access_handler_field_section.inc',
            2 => 'includes/workbench_access_handler_filter_access.inc',
            3 => 'includes/workbench_access_handler_sort_section.inc',
            4 => 'modules/taxonomy.workbench_access.inc',
            5 => 'modules/menu.workbench_access.inc',
            6 => 'tests/workbench_access.test',
          ),
          'version' => '7.x-1.5',
          'project' => 'workbench_access',
          'datestamp' => '1485026290',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'version' => '7.x-1.5',
      ),
      'date_ical' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/date_ical/date_ical.module',
        'basename' => 'date_ical.module',
        'name' => 'date_ical',
        'info' => 
        array (
          'name' => 'Date iCal',
          'description' => 'Enables export of iCal feeds using Views, and import of iCal feeds using Feeds.',
          'package' => 'Date/Time',
          'php' => '5.3',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views (>=7.x-3.5)',
            1 => 'date_views',
            2 => 'entity',
            3 => 'libraries (>=7.x-2.0)',
            4 => 'date',
            5 => 'date_api',
          ),
          'files' => 
          array (
            0 => 'includes/date_ical_plugin_row_ical_entity.inc',
            1 => 'includes/date_ical_plugin_row_ical_fields.inc',
            2 => 'includes/date_ical_plugin_style_ical_feed.inc',
            3 => 'includes/DateiCalFeedsParser.inc',
          ),
          'version' => '7.x-3.9',
          'project' => 'date_ical',
          'datestamp' => '1461609737',
        ),
        'schema_version' => '7300',
        'version' => '7.x-3.9',
      ),
      'noggin' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/contrib/noggin/noggin.module',
        'basename' => 'noggin.module',
        'name' => 'noggin',
        'info' => 
        array (
          'name' => 'Noggin',
          'description' => 'Allows site builders to easily change the header image for themes.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'noggin.module',
            1 => 'noggin.install',
          ),
          'version' => '7.x-1.1',
          'project' => 'noggin',
          'datestamp' => '1345723644',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7102',
        'version' => '7.x-1.1',
      ),
      'advertisement_banners' => 
      array (
        'filename' => '/var/aegir/platforms/circleten-prod-190116/sites/all/modules/advertisement_banner/advertisement_banners.module',
        'basename' => 'advertisement_banners.module',
        'name' => 'advertisement_banners',
        'info' => 
        array (
          'name' => 'Advertisement Banners',
          'description' => 'Installs Banner Content Type, Sidebar Top and Sidebar Bottom Banner Blocks',
          'core' => '7.x',
          'package' => 'MCN Base Features',
          'version' => '7.x-1.4',
          'project' => 'advertisement_banners',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'ctools',
            2 => 'features',
            3 => 'field_group',
            4 => 'image',
            5 => 'link',
            6 => 'list',
            7 => 'mcn_base_feature',
            8 => 'media',
            9 => 'node',
            10 => 'options',
            11 => 'strongarm',
            12 => 'taxonomy',
            13 => 'views',
          ),
          'features' => 
          array (
            'context' => 
            array (
              0 => 'banner_blocks',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'field_group:field_group:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'features_api' => 
            array (
              0 => 'api:2',
            ),
            'field_base' => 
            array (
              0 => 'field_banner_image',
              1 => 'field_banner_link',
              2 => 'field_banner_space',
              3 => 'field_target',
            ),
            'field_group' => 
            array (
              0 => 'group_banner_link|node|banner|form',
            ),
            'field_instance' => 
            array (
              0 => 'node-banner-field_banner_image',
              1 => 'node-banner-field_banner_link',
              2 => 'node-banner-field_banner_space',
              3 => 'node-banner-field_target',
            ),
            'node' => 
            array (
              0 => 'banner',
            ),
            'taxonomy' => 
            array (
              0 => 'banner_space',
            ),
            'user_permission' => 
            array (
              0 => 'create banner content',
              1 => 'delete any banner content',
              2 => 'delete own banner content',
              3 => 'edit any banner content',
              4 => 'edit own banner content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_banner',
              1 => 'comment_banner',
              2 => 'comment_default_mode_banner',
              3 => 'comment_default_per_page_banner',
              4 => 'comment_form_location_banner',
              5 => 'comment_preview_banner',
              6 => 'comment_subject_field_banner',
              7 => 'menu_options_banner',
              8 => 'menu_parent_banner',
              9 => 'node_options_banner',
              10 => 'node_preview_banner',
              11 => 'node_submitted_banner',
              12 => 'scheduler_publish_enable_banner',
              13 => 'scheduler_publish_touch_banner',
              14 => 'scheduler_unpublish_enable_banner',
            ),
            'views_view' => 
            array (
              0 => 'banners',
            ),
          ),
          'project status url' => 'http://features.devmcn.com/fserver',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'version' => '7.x-1.4',
      ),
    ),
    'themes' => 
    array (
    ),
  ),
  'profiles' => 
  array (
    'scout_profile' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);