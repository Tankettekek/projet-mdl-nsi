from matplotlib import pyplot as plt
import pandas as pd
import time

niveau = ["Premiere", "Terminale", "Seconde"]
lettres = "ABCDEFGHIJKL"
classes = []
classes_n = []
for n in niveau:
    for l in lettres:
        classes.append(n + " " + l)


data = pd.read_csv("./server/info.csv", usecols=["Classe"], sep=";")
classe = data['Classe'].tolist()

for c in classes:
    classes_n.append(classe.count(c))

del classes
n = ["1", "T", "2"]
classes = []
for n in n:
    for l in lettres:
        classes.append(n + "°" + l)

while 0 in classes_n:
    i = classes_n.index(0)
    if classes_n[i] == 0:
        del classes_n[i]
        del classes[i]

PATH = "/img/tmp/" + str(int(time.time())) + ".png"

plt.style.use('dark_background')
plt.bar(classes, classes_n)
plt.xlabel("Classes")
plt.ylabel("Nombre d'élèves")
plt.title("Répartition par classes")
plt.savefig("." + PATH)

print(PATH)


