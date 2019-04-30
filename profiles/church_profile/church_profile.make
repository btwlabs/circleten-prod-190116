; Church    profile make
;
 core = 7.x
 api  = 2

 options[no-core]                           = TRUE


;****************************************
; Features
;****************************************
 projects[audio_rss][subdir]                = features
 projects[audio_rss][type]                   = module
 projects[audio_rss][download][type]         = git
 projects[audio_rss][download][url]          = git@devmcn.com:features/audio_rss
 projects[audio_rss][download][working-copy] = TRUE

 projects[members_feature][subdir]          = features
 projects[members_feature][type]             = module
 projects[members_feature][download][type]   = git
 projects[members_feature][download][url]    = git@devmcn.com:features/members_feature
 projects[members_feature][download][working-copy] = TRUE

 projects[ministry][subdir]                 = features
 projects[ministry][type]                    = module
 projects[ministry][download][type]          = git
 projects[ministry][download][url]           = git@devmcn.com:features/ministry
 projects[ministry][download][working-copy]  = TRUE

 projects[newsletter][subdir]               = features
 projects[newsletter][type]                  = module
 projects[newsletter][download][type]        = git
 projects[newsletter][download][url]         = git@devmcn.com:features/newsletter
 projects[newsletter][download][working-copy] = TRUE

 projects[service][subdir]                  = features
 projects[service][type]                     = module
 projects[service][download][type]           = git
 projects[service][download][url]            = git@devmcn.com:features/service
 projects[service][download][working-copy]   = TRUE

 projects[staff][subdir]                    = features
 projects[staff][type]                       = module
 projects[staff][download][type]             = git
 projects[staff][download][url]              = git@devmcn.com:features/staff
 projects[staff][download][working-copy]     = TRUE



;****************************************
; Modules
;****************************************
; custom



; contrib
 projects[profile2][subdir]                 = contrib
 projects[views_rss][subdir]                = contrib
 projects[views_rss][version]                = 2.x-dev
 projects[views_rss_itunes][subdir]         = contrib
 projects[views_rss_itunes][version]         = 1.x-dev


;****************************************
; Patches
;****************************************


;****************************************
; Themes
;****************************************



;****************************************
; Libraries
;****************************************



