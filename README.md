Fancybox2
=========

## Beschreibung
Dieses Plugin registriert die benötigten CSS und Javascript Dateien, um die Fancybox zu nutzen. Standardmäßig greift die Fancybox auf alle Bilder (jpg, jpeg, png und gif).

Das Plugin ist in erster Linie dazu gedacht, out-of-the-box zu funktionieren. Es müssen keine Einstellungen, Anpassungen o.Ä. gemacht werden, damit sie auf Bilder greift. Mit verschiedenen Filtern lassen sich die Einstellungen allerdings auch anpassen.


## Verfügbare Filter

Über den Filter `pix_fancybox_parameters` sind die eigentlichen Fancybox Parameter anpassbar.
```
function change_fancybox($content){
	$content = 	$content
				.",'padding' : 0";
				
	return $content;
}
add_filter('pix_fancybox_parameters','change_fancybox');
```

Über `pix_fancybox_trigger_on` kann manuell angepasst werden, worauf die Fancybox greifen soll.

Das folgende Codebeispiel fügt die Klasse `.fancybox` als weiteren Trigger für die Fancybox hinzu.

```
function change_trigger($trigger){
	$new_trigger = array('.fancybox');
	$trigger = array_merge($trigger, $new_trigger);
	return $trigger;
}
add_filter('pix_fancybox_trigger_on','change_trigger');
```

Das folgende Beispiel widerum löscht alle bisherigen Trigger und fügt einen einzelnen neuen hinzu:
```
function change_trigger($trigger){
	$trigger = array('.fancybox');
	return $trigger;
}
add_filter('pix_fancybox_trigger_on','change_trigger');
```
