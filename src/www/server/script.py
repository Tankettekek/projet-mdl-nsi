import csv
import sys
import datetime
from collections import defaultdict

def jeudis_suivants():
    #calcul de la date
    test_date = datetime.datetime.now() 
    weekday_idx = 3
    
    #calcul de la différence des jours 
    days_delta = weekday_idx - test_date.weekday()
    if days_delta <= 0:
        days_delta += 7
    
    jeudi_prochain = test_date + datetime.timedelta(days_delta)
    jeudi_deuxieme_procain = jeudi_prochain +datetime.timedelta(7)
    jeudi_troi_prochain = jeudi_deuxieme_procain + datetime.timedelta(7)

    return jeudi_prochain.strftime("%d/%m/%Y"), jeudi_deuxieme_procain.strftime("%d/%m/%Y"), jeudi_troi_prochain.strftime("%d/%m/%Y")

def retour_jours(j1, j2, j3):
    columns = defaultdict(list)
    resp = ""
    with open('info.csv') as f:
        reader = csv.DictReader(f, delimiter=";") 
        for row in reader:
            for (k,v) in row.items(): 
                columns[k].append(v) 
    if columns['Jour'].count(str(j1)) < 4:
        resp = resp + "<option value='" + j1 +"'>" + j1 +"</option>"        
    if columns['Jour'].count(str(j2)) < 4:
        resp = resp + "<option value='" + j2 +"'>" + j2 +"</option>"
    if columns['Jour'].count(str(j3)) < 4:
        resp = resp + "<option value='" + j3 +"'>" + j3 +"</option>"
    return resp

def retour_horaires(jour):
    resp = ""
    liste_heures = ['11:00', '11:30', '12:00', '12:30']
    with open('info.csv', 'r') as f:
        reader = csv.reader(f, delimiter=";")
        for row in reader:
            if jour in row:
                for heure in liste_heures:
                    if heure in row:
                        liste_heures.remove(heure)
    for heure in liste_heures:
        resp = resp + "<option value='" + heure +"'>" + heure +"</option>" 
    return resp


commande = str(sys.argv[1])
if len(sys.argv) == 3:
    jour = str(sys.argv[2])
    print(retour_horaires(jour))
else:
    j1, j2, j3 = jeudis_suivants()
    print(retour_jours(j1, j2, j3))