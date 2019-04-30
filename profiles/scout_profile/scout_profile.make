; Scout   profile make
;
 core = 7
 api  = 2

 projects[drupal][type]                     = core


;****************************************
; Features
;****************************************

 project[basic_page][type]                  = feature
 project[basic_page][download][type]        = git
 project[basic_page][download][url]         = git@devmcn.com:features/basic_page.git
 project[basic_page][download][working-copy] = TRUE

 project[mcn_base_feature][type]                  = feature
 project[mcn_base_feature][download][type]        = git
 project[mcn_base_feature][download][url]         = git@devmcn.com:features/mcn_base_feature.git
 project[mcn_base_feature][download][working-copy] = TRUE

 project[mcn_wysiwyg][type]                  = feature
 project[mcn_wysiwyg][download][type]        = git
 project[mcn_wysiwyg][download][url]         = git@devmcn.com:features/mcn_wysiwyg.git
 project[mcn_wysiwyg][download][working-copy] = TRUE

;****************************************
; Profiles
;****************************************

 projects[scout_profile][type]         = profile
 projects[scout_profile][download][type]   = git
 projects[scout_profile][download][url]    = git@devmcn.com:drupal/profiles/scout_profile.git
 projects[scout_profile][download][working-copy] = TRUE 




;****************************************
; Modules
;****************************************
; custom

 projects[ical_aggregator][subdir]          = contrib
 projects[ical_aggregator][type]             = module
 projects[ical_aggregator][download][type]   = git
 projects[ical_aggregator][download][url]    = https://git.drupal.org/sandbox/TimBrandin/1207150.git
 projects[ical_aggregator][download][working-copy] = TRUE

 projects[parser_ical][subdir]              = contrib
 projects[parser_ical][version]             = 2.x-dev

; contrib
 
 projects[context_session][subdir]          = contrib
 projects[context_session][version]          = 1.x-dev
 projects[date_ical][subdir]                = contrib
 projects[draggableviews][subdir]           = contrib
 projects[delta][subdir]                    = contrib
 projects[domain][subdir]                   = contrib
 projects[domain_blocks][subdir]            = contrib
 projects[domain_views][subdir]             = contrib
 projects[draggableviews][subdir]           = contrib
 projects[entityreference][subdir]          = contrib
 projects[fpa][subdir]                      = contrib
 projects[gmap][subdir]                     = contrib
 projects[i18n][subdir]                     = contrib
 projects[jquerymenu][subdir]               = contrib
 projects[jquerymenu][version]              = 4.0-alpha3
 projects[module_filter][subdir]            = contrib
 projects[noggin][subdir]                   = contrib
 projects[og][subdir]                       = contrib
 projects[omega_tools][subdir]              = contrib
 projects[variable][subdir]                 = contrib
 projects[workbench][subdir]                = contrib
 projects[workbench_access][subdir]         = contrib
 projects[workbench_files][subdir]          = contrib
 projects[workbench_media][subdir]          = contrib
 projects[workbench_moderation][subdir]     = contrib
 projects[addressfield][subdir]             = contrib
 projects[commerce][subdir]                 = contrib
 projects[date_ical][subdir]                = contrib
 projects[domaincontext][subdir]            = contrib
 projects[domaincontext][version]           = 1.0-alpha1
 projects[domain_menu_access][subdir]       = contrib
 projects[domain_views][subdir]             = contrib
 projects[filefield_sources][subdir]        = contrib
 projects[google_analytics][subdir]         = contrib
 projects[media][subdir]                    = contrib
 projects[mediaelement][subdir]             = contrib
 projects[pathauto][subdir]                 = contrib
 projects[remote_file_source][subdir]       = contrib
 projects[remote_stream_wrapper][subdir]    = contrib
 projects[remote_stream_wrapper][version]   = 1.0-rc1
 projects[resp_img][subdir]                 = contrib
 projects[role_delegation][subdir]          = contrib
 projects[simplehtmldom][subdir]            = contrib
 projects[views_hacks][subdir]              = contrib
 projects[views_hacks][version]             = 1.0-alpha2
 projects[workbench_moderation][subdir]     = contrib

 projects[mcn_circleten][subdir]            = custom
 projects[mcn_circleten][type]              = module
 projects[mcn_circleten][download][type]    = git
 projects[mcn_circleten][download][url]     = git@devmcn.com:sites/circle10.org/modules/mcn_circleten
 projects[mcn_circleten][download][working-copy] = TRUE

 project[ctools][subdir]                    = contrib
 project[features][subdir]                  = contrib
 project[strongarm][subdir]                 = contrib



;****************************************
; Patches
;****************************************




;****************************************
; Themes
;****************************************


;****************************************
; Libraries
;****************************************

 projects[profiler][type]                    = library

