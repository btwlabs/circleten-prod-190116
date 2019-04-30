; Scout   profile make
;
 core = 7.x
 api  = 2

 options[no-core]                           = TRUE


;****************************************
; Features
;****************************************





;****************************************
; Modules
;****************************************
; custom

; mcn_circleten is going to be site specific
;projects[mcn_circleten][subdir]            = custom
;projects[mcn_circleten][type]               = module
;projects[mcn_circleten][download][type]     = git
;projects[mcn_circleten][download][url]      = git@devmcn.com:sites/circle10.org/modules/mcn_circleten
;projects[mcn_circleten][download][working-copy] = TRUE


 projects[ical_aggregator][subdir]          = contrib
 projects[ical_aggregator][type]             = module
 projects[ical_aggregator][download][type]   = git
 projects[ical_aggregator][download][url]    = http://git.drupal.org/sandbox/TimBrandin/1207150
 projects[ical_aggregator][download][working-copy] = TRUE

 projects[parser_ical][subdir]              = contrib
 projects[parser_ical][type]                 = module
 projects[parser_ical][download][type]       = get
 projects[parser_ical][download][url]        = http://ftp.drupal.org/files/projects/parser_ical-7.x-2.x-dev.tar.gz


; contrib
 
 projects[context_session][subdir]          = contrib
 projects[context_session][version]          = 1.x-dev
 projects[date_ical][subdir]                = contrib
 projects[draggableviews][subdir]           = contrib
 projects[delta][subdir]                    = contrib
 projects[domain][subdir]                   = contrib
 projects[domain_blocks][subdir]            = contrib
 projects[domain_views][subdir]             = contrib
; draggableviews 1.x is depricated
 projects[draggableviews][subdir]           = contrib
 projects[draggableviews][version]           = 1.x-dev
 projects[entityreference][subdir]          = contrib
 projects[fpa][subdir]                      = contrib
 projects[gmap][subdir]                     = contrib
 projects[gmap][version]                     = 2.x-dev
 projects[i18n][subdir]                     = contrib
 projects[jquerymenu][subdir]               = contrib
 projects[jquerymenu][version]               = 3.x-dev
 projects[module_filter][subdir]            = contrib
 projects[noggin][subdir]                   = contrib
 projects[noggin][version]                   = 1.0
 projects[og][subdir]                       = contrib
;projects[parser_ical][subdir]              = contrib
;projects[parser_ical][version]              = 7.x-2.x-dev
 projects[omega_tools][subdir]              = contrib
 projects[variable][subdir]                 = contrib
 projects[workbench][subdir]                = contrib
 projects[workbench][version]                = 1.x-dev
 projects[workbench_access][subdir]         = contrib
 projects[workbench_files][subdir]          = contrib
 projects[workbench_media][subdir]          = contrib
 projects[workbench_media][version]          = 2.1
 projects[workbench_moderation][subdir]     = contrib


;****************************************
; Patches
;****************************************




;****************************************
; Themes
;****************************************


;****************************************
; Libraries
;****************************************



