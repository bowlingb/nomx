��    �      �  �   �
      �     �  "   �  b  �       (   7  #   `     �     �  &   �     �     �     	  *        I     Q  )   X     �  "   �     �     �  /   �          +     4     B  #   U  #   y  %   �      �     �     �          #     :     J  W   f     �  "   �     �  &     "   C     f     �     �     �     �  !   �       '   *  "   R     u     �  !   �     �  !   �  %   �           ?  !   R     t  &   �  5   �  *   �  .     =   F     �  (   �  %   �  %   �  0     &   <     c  /   u     �  >   �  @   �     7     <     U  3   j  ,   �     �     �     �          "     6  '   N     v     �     �     �     �  +   �          ,     J     ]     s     �     �     �     �  	   �     �  %   �  /        D     b     }     �  &   �     �  !   �          -     3  1   :  /   l     �  !   �     �  ,   �  T         i   
   �       �      !     "!     0!     =!     K!     ^!     }!  4   �!  $   �!     �!     "     /"     M"     i"     �"  *   �"  :   �"     #      !#  )   B#     l#  #   �#  0   �#     �#     �#  
    $     $     $     "$     :$     U$     p$  %   �$     �$     �$     �$     %  &   %     C%     E%     U%  4   f%     �%     �%     �%  �  �%     :'  8   <'     u'  #   �+  6   �+  1   �+  0   #,  4   T,  @   �,  !   �,     �,  ,   -  7   1-     i-     q-  8   x-     �-  3   �-  +   .  '   -.  V   U.  %   �.     �.     �.  )   �.  9   %/  9   _/  ;   �/  9   �/     0     +0  $   F0  #   k0     �0  $   �0  g   �0  +   91  3   e1     �1  ;   �1  3   �1  *   )2  "   T2  *   w2  *   �2  (   �2  5   �2  3   ,3  1   `3  /   �3  !   �3     �3  .   4      34  ;   T4  =   �4  4   �4      5  9   $5  2   ^5  ?   �5  g   �5  I   96  2   �6  G   �6     �6  <   7  0   O7  0   �7  9   �7  '   �7     8  F   &8  *   m8  [   �8  b   �8     W9  ,   ^9  *   �9  `   �9  4   :  &   L:  (   s:     �:  )   �:  &   �:  &   ;  6   4;     k;     �;  /   �;  -   �;     <  D   <  *   _<  -   �<     �<     �<     �<     =  %   =     B=     ^=     v=  +   �=  F   �=  I   �=  ;   F>  @   �>     �>  ,   �>  6   ?  -   ;?  1   i?  -   �?     �?     �?  D   �?  <   @     \@  '   r@  "   �@  6   �@  �   �@  �   uA     +B  %   FB     lB     �B     �B  #   �B  *   �B  /   C      CC  F   dC  /   �C  +   �C  3   D  %   ;D  %   aD  #   �D     �D  1   �D  R   �D  *   PE  .   {E  7   �E  $   �E  9   F  0   AF     rF     �F     �F     �F     �F  %   �F  *   �F  +   G  )   BG  6   lG  0   �G  ?   �G  A   H     VH  6   sH     �H     �H     �H  >   �H     I     I     I                   �      T   �   �             g               2   R   �       �       �   n       4          3   Y   �   	       f   l   Z   7   k       �       y           {   �      .   *           &      
   |       �   %   9   $             I          }   5   �              s   �   �                    z      �   j   F   \   O       �   �               :      u   �               E   B   M   �       W   �          �   '   ,   �   �   -   i       �   _      �       r   S          �   �           [   >       C   G   +           �   �   !       ~   �      t       �      c   d   ?   q   L       �       ;   `   ^           @   �   �   6   o      b               �   J   <   v             =   V   p   K   �   #      ]   �   �   a   H   �   (       e   U   X   x   �       �       /   m   1   w   Q   "   A   N               h       �   �              �   0   8   )   D   �       P      �   �       
 
Error applying application rules. 
Usage: %(progname)s %(command)s

%(commands)s:
 %(enable)-31s enables the firewall
 %(disable)-31s disables the firewall
 %(default)-31s set default policy
 %(logging)-31s set logging to %(level)s
 %(allow)-31s add allow %(rule)s
 %(deny)-31s add deny %(rule)s
 %(reject)-31s add reject %(rule)s
 %(limit)-31s add limit %(rule)s
 %(delete)-31s delete %(urule)s
 %(insert)-31s insert %(urule)s at %(number)s
 %(reset)-31s reset firewall
 %(status)-31s show firewall status
 %(statusnum)-31s show firewall status as numbered list of %(rules)s
 %(statusverbose)-31s show verbose firewall status
 %(show)-31s show firewall report
 %(version)-31s display version information

%(appcommands)s:
 %(applist)-31s list application profiles
 %(appinfo)-31s show information on %(profile)s
 %(appupdate)-31s update %(profile)s
 %(appdefault)-31s set default application policy
  (skipped reloading firewall)  Attempted rules successfully unapplied.  Some rules could not be unapplied. %s is group writable! %s is world writable! '%(f)s' file '%(name)s' does not exist '%s' already exists. Aborting '%s' does not exist '%s' is not writable (be sure to update your rules accordingly) Aborted Action Adding IPv6 rule failed: IPv6 not enabled Available applications: Backing up '%(old)s' to '%(new)s'
 Bad destination address Bad interface name Bad interface name: can't use interface aliases Bad interface type Bad port Bad port '%s' Bad source address Cannot insert rule at position '%d' Cannot insert rule at position '%s' Cannot specify 'all' with '--add-new' Cannot specify insert and delete Checking ip6tables
 Checking iptables
 Checking raw ip6tables
 Checking raw iptables
 Checks disabled Command '%s' already exists Command may disrupt existing ssh connections. Proceed with operation (%(yes)s|%(no)s)?  Could not back out rule '%s' Could not delete non-existent rule Could not find '%s'. Aborting Could not find a profile matching '%s' Could not find executable for '%s' Could not find profile '%s' Could not find protocol Could not find rule '%d' Could not find rule '%s' Could not get listening status Could not get statistics for '%s' Could not load logging rules Could not normalize destination address Could not normalize source address Could not perform '%s' Could not set LOGLEVEL Could not update running firewall Couldn't find '%s' Couldn't find parent pid for '%s' Couldn't find pid (is /proc mounted?) Couldn't open '%s' for reading Couldn't stat '%s' Couldn't update application rules Couldn't update rules file Couldn't update rules file for logging Default %(direction)s policy changed to '%(policy)s'
 Default application policy changed to '%s' Default: %(in)s (incoming), %(out)s (outgoing) Deleting:
 %(rule)s
Proceed with operation (%(yes)s|%(no)s)?  Description: %s

 Duplicate profile '%s', using last found ERROR: this script should not be SGID ERROR: this script should not be SUID Firewall is active and enabled on system startup Firewall not enabled (skipping reload) Firewall reloaded Firewall stopped and disabled on system startup Found exact match Found multiple matches for '%s'. Please use exact profile name Found non-action/non-logtype match (%(xa)s/%(ya)s %(xl)s/%(yl)s) From IPv6 support not enabled Improper rule syntax Improper rule syntax ('%s' specified with app rule) Insert position '%s' is not a valid position Invalid '%s' clause Invalid 'from' clause Invalid 'port' clause Invalid 'proto' clause Invalid 'to' clause Invalid IP version '%s' Invalid IPv6 address with protocol '%s' Invalid command '%s' Invalid interface clause Invalid log level '%s' Invalid log type '%s' Invalid option Invalid policy '%(policy)s' for '%(chain)s' Invalid port with protocol '%s' Invalid ports in profile '%s' Invalid position ' Invalid position '%d' Invalid profile Invalid profile name Invalid token '%s' Logging disabled Logging enabled Logging:  Missing policy for '%s' Mixed IP versions for 'from' and 'to' Must specify 'tcp' or 'udp' with multiple ports Need 'from' or 'to' with '%s' Need 'to' or 'from' clause New profiles: No ports found in profile '%s' No rules found for application profile Option 'log' not allowed here Option 'log-all' not allowed here Port ranges must be numeric Port: Ports: Profile '%(fn)s' has empty required field '%(f)s' Profile '%(fn)s' missing required field '%(f)s' Profile: %s
 Profiles directory does not exist Protocol mismatch (from/to) Protocol mismatch with specified protocol %s Resetting all rules to installed defaults. Proceed with operation (%(yes)s|%(no)s)?  Resetting all rules to installed defaults. This may disrupt existing ssh connections. Proceed with operation (%(yes)s|%(no)s)?  Rule added Rule changed after normalization Rule deleted Rule inserted Rule updated Rules updated Rules updated (v6) Rules updated for profile '%s' Skipped reloading firewall Skipping '%(value)s': value too long for '%(field)s' Skipping '%s': also in /etc/services Skipping '%s': couldn't process Skipping '%s': couldn't stat Skipping '%s': field too long Skipping '%s': invalid name Skipping '%s': name too long Skipping '%s': too big Skipping '%s': too many files read already Skipping IPv6 application rule. Need at least iptables 1.4 Skipping adding existing rule Skipping inserting existing rule Skipping malformed tuple (bad length): %s Skipping malformed tuple: %s Skipping unsupported IPv6 '%s' rule Status: active
%(log)s
%(pol)s
%(app)s%(status)s Status: active%s Status: inactive Title: %s
 To Unknown policy '%s' Unsupported action '%s' Unsupported default policy Unsupported direction '%s' Unsupported policy '%s' Unsupported policy for direction '%s' Unsupported protocol '%s' WARN: '%s' is world readable WARN: '%s' is world writable Wrong number of arguments You need to be root to run this script n problem running running ufw-init uid is %(uid)s but '%(path)s' is owned by %(st_uid)s unknown y yes Project-Id-Version: ufw
Report-Msgid-Bugs-To: FULL NAME <EMAIL@ADDRESS>
POT-Creation-Date: 2011-03-22 10:34-0500
PO-Revision-Date: 2010-09-28 06:10+0000
Last-Translator: Bruno Patri <Unknown>
Language-Team: French <fr@li.org>
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Launchpad-Export-Date: 2012-02-13 23:52+0000
X-Generator: Launchpad (build 14781)
 
 
Erreur lors du traitement des règles de l'application. 
Utilisation : %(progname)s %(command)s

%(commands)s :
 %(enable)-31s activer le pare-feu
 %(disable)-31s désactiver le pare-feu
 %(default)-31s définir la stratégie par défaut
 %(logging)-31s définir la journalisation à %(level)s
 %(allow)-31s ajouter autorisation %(rule)s
 %(deny)-31s ajouter interdiction %(rule)s
 %(reject)-31s ajouter refus %(rule)s
 %(limit)-31s ajouter limite %(rule)s
 %(delete)-31s supprimer %(urule)s
 %(insert)-31s insérer %(urule)s at %(number)s
 %(reset)-31s réinitialiser le pare-feu
 %(status)-31s afficher le statut du pare-feu
 %(statusnum)-31s afficher le statut du pare-feu en liste numérotée de %(rules)s
 %(statusverbose)-31s afficher le statut verbeux du pare-feu
 %(show)-31s afficher le rapport du pare-feu
 %(version)-31s afficher les informations de version

%(appcommands)s :
 %(applist)-31s lister les profiles d'application
 %(appinfo)-31s afficher les informations sur %(profile)s
 %(appupdate)-31s mettre à jour %(profile)s
 %(appdefault)-31s définir la stratégie d'application par défaut
  (rechargement du pare-feu ignoré)  Les règles choisies ont été retirées avec succès  Certaines régles ne peuvent pas être retirées %s est accessible en écriture pour le groupe ! %s est accessible en écriture pour tout le monde ! Le fichier de « %(f)s » nommé « %(name)s » n'existe pas « %s » existe déjà. Abandon « %s » n'existe pas « %s » n'est pas accessible en écriture (veillez à mettre à jour vos règles en conséquence) Annulé Action L'ajout de la règle IPv6 a échoué : IPv6 non activé Applications disponibles : Sauvegarde de « %(old)s » vers « %(new)s »
 L'adresse de destination n'est pas correcte Le nom de l'interface n'est pas correct Le nom de l'interface n'est pas correct : impossible d'utiliser les alias d'interface Le type d'interface n'est pas correct Port incorrect Port « %s » incorrect L'adresse de la source n'est pas correcte Impossible d'insérer la règle à la position « %d » Impossible d'insérer la règle à la position « %s » Impossible de spécifier « all » avec « --add-new » Impossible de spécifier « insert » et « delete » Vérification de ip6tables
 Vérification de iptables
 Vérification des règles ip6tables
 Vérification des règles iptables
 Vérifications désactivées Commande « %s » déjà existante La commande peut interrompre les connexions ssh existantes. Exécuter l'opération (%(yes)s|%(no)s) ?  Impossible de remonter la règle « %s » Impossible de supprimer une règle qui n'existe pas « %s » introuvable. Abandon Impossible de trouver un profil correspondant à « %s » Impossible de trouver l'exécutable pour « %s » Impossible de trouver le profil « %s » Impossible de trouver le protocole Impossible de trouver la règle « %d » Impossible de trouver la règle « %s » Impossible d'acquérir l'état d'écoute Impossible d'obtenir les statistiques pour « %s » Impossible de charger les règles de journalisation Impossible de normaliser l'adresse de destination Impossible de normaliser l'adresse de la source Impossible d'accomplir « %s » Impossible de définir LOGLEVEL Impossible de mettre à jour le pare-feu actif Impossible de trouver « %s » Impossible de trouver le « pid » parent pour « %s » Impossible de trouver le « pid » (/proc est-il monté ?) Impossibel d'ouvrir le fichier « %s » en lecture Impossible d'évaluer « %s » Impossible de mettre à jour les règles de l'application Impossible de mettre à jour le fichier de règles Impossible de mettre à jour les règles pour la journalisation La stratégie par défaut pour le sens « %(direction)s » a été remplacée par « %(policy)s »
 La stratégie par défaut de l'application a été changée en « %s » Par défaut : %(in)s (entrant), %(out)s (sortant) Suppression de :
 %(rule)s
Exécuter l'opération (%(yes)s|%(no)s) ?  Description : %s

 Profil « %s » en doublon, utilisation du dernier trouvé ERREUR : ce script ne devrait pas avoir le SGID ERREUR : ce script ne devrait pas avoir le SUID Le pare-feu est actif et lancé au démarrage du système Pare-feu inactif (rechargement ignoré) Pare-feu rechargé Le pare-feu est arrêté et désactivé lors du démarrage du système Une correspondance exacte a été trouvée Correspondance multiple trouvée pour « %s ». Veuillez utiliser le nom exact du profil. Une « non-action/non-logtype » correspondant à (%(xa)s/%(ya)s %(xl)s/%(yl)s) a été trouvée Depuis La prise en charge d'IPv6 n'est pas activée La règle présente une syntaxe incorrecte La règle présente une syntaxe incorrecte (« %s » spécifié avec une règle d'application) La position d'insertion « %s » n'est pas valable La clause « %s » n'est pas valable La clause « from » n'est pas valable Clause « port » non valable La clause « proto » n'est pas valable La clause « to » n'est pas valable Version d'IP non valable : « %s » Adresse IPv6 incompatible avec le protocole « %s » Commande « %s » non valable Clause d'interface incorrecte Niveau de journalisation non valable « %s » Type de journalisation « %s » non valable option non valable La stratégie « %(policy)s » pour « %(chain)s » est invalide Port invalide avec le protocole « %s » Ports non valables dans le profile « %s » Position non valable ' Position « %d » non valable Profil non valable Nom de profil non valable Le jeton « %s » n'est pas valable Journalisation désactivée Journalisation activée Journalisation :  La stratégie pour « %s » est manquante Versions d'IP différentes pour les clauses « from » et « to » Vous devez spécifier « tcp » ou « udp » avec des ports multiples « for » ou « to » sont nécessaires avec « %s » Une clause « from » ou une clause « to » est nécessaire Nouveaux profils : Aucun port trouvé dans le profil « %s » Aucune règle trouvée pour le profil de l'application L'option « log » n'est pas autorisée ici L'option « log-all » n'est pas autorisée ici Les plages de ports doivent être des nombres Port : Ports : Le champ requis « %(f)s » est vide dans le profil « %(fn)s » Le champrequis « %(f)s » manque au profil « %(fn)s » Profil : « %s »
 Le répertoire des profils n'existe pas Protocoles incompatibles (from/to) Protocole incompatible avec le protocole %s spécifié Réinitialisation de toutes les règles à leurs paramètres installés par défaut. Exécuter l'opération (%(yes)s|%(no)s) ?  Réinitialisation de toutes les règles à leurs paramètres installés par défaut. Cela peut interrompre les connexions ssh existantes. Exécuter l'opération (%(yes)s|%(no)s) ?  La règle a été ajoutée Règle modifiée après normalisation La règle a été supprimée La régle a été insérée La règle a été mise à jour Les règles ont été mises à jour Les règles ont été mises à jour (IPv6) Règles mises à jour pour le profil « %s » Rechargement du pare-feu ignoré « %(value)s » ignoré : valeur trop grande pour « %(field)s » « %s » ignoré : déjà dans /etc/services « %s » ignoré : traitement impossible « %s » ignoré : impossible à évaluer (stat) « %s » ignoré : champ trop long « %s » ignoré : nom non valable « %s » ignoré : nom trop long « %s » ignoré : trop gros « %s » ignoré : trop de fichiers déjà lus Omission de la règle IPv6 de l'application. Cela requiert au minimum iptables 1.4 Omission de l'ajout de la règle existante Omission de l'insertion de la règle existante Omission du tuple non conforme (longeur erronée) : %s Omission du tuple non conforme : %s Omission de la règle IPv6 non prise en charge « %s » État : actif
%(log)s
%(pol)s
%(app)s%(status)s État : actif%s État : inactif Titre : %s
 Vers Stratégie « %s » inconnue Action « %s » non prise en charge Stratégie par défaut non prise en charge Le sens « %s » n'est pas pris en charge Stratégie « %s » non prise en charge Stratégie non prise en charge pour le sens « %s » Le protocole « %s » n'est pas pris en charge ALERTE : « %s » est accessible en lecture à tout le monde ALERTE : « %s » est accessible en écriture à tout le monde Nombre d'arguments incorrect Vous devez être root pour pouvoir exécuter ce script n problème en cours exécution de ufw-init uid est %(uid)s mais « %(path)s » appartient à %(st_uid)s inconnu o oui 