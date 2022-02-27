from random import randint

#Grille PC
gridComp = [0] * 10
for i in range (10) :
	gridComp [i] = [0] * 10

#Grille joueur
gridPlay = [0] * 10
for i in range (10) :
	gridPlay [i] = [0] * 10

def PosOK(g, l, c, d, t): #test si la position du bateau est bonne ou non
	for i in range (t) : #t est la taille du bateau
		if d == 1 : # d = 1 : horizontal
		# On veut savoir quand est ce que ce n'est pas une bonne position
			if c+t > 10 or g[l][c+i] != 0: 	# Si le bateau sort => False
													# Si la place est déjà prise => False
			# Comme le bateau est horizontal on fait [c+t] car c correspond à la colonne
				return False
		elif d == 2 :
			if l+t > 10 or g[l+i][c] != 0 :
				#Idem pour les lignes sauf que maintenant on test pour [l+t]
				return False
	# Si il a passé tous les tests, alors on renvoie vrai et donc on peut
	# ajouter le bateau dans la grille
	return True

def AddBoat_Comp (l, c, d, t, b):
	global gridComp
	# On a besoin de récupérer les coordonnées du bateau (l,c),
	# sa taille (t), sa direction (d) et son nom (b)

	for i in range (t) :
		if d == 1 : 		#si la direction est horizontale on ajoute des colonnes
			gridComp[l][c+i] = b
		elif d == 2 : 		#sinon on ajoute des lignes
			gridComp[l+i][c] = b
	# On a donc bien ajouté le bateau dans la grille

def initGridComp(t,b):
	global gridComp
	# On tire au hasard une coordonnée et une direction
	c = randint(0,9)
	l = randint(0,9)
	d = randint(1,2)
	while not PosOK(gridComp,l,c,d,t): 	# tant que la position n'est pas bonne, alors
										# on tire de nouvelles positions aléatoirement
		c = randint(0,9)
		l = randint(0,9)
		d = randint(1,2)
	# On quitte la boucle while donc les positions sont bonnes
	AddBoat_Comp(l,c,d,t,b) # On peut donc ajouter le bateau à la grille
							# en se servant de la fonction AddBoat_Comp()

def PrintGridComp ():
	global gridComp
	# On va rappeler la fonction qui créer un bateau pour chaque bateau. Il faut voir
	# liste dans le PDF par exemple initGridComp (5,1) va ajouter un porte-avion
	# (taille = 5, nom = 1)
	initGridComp(5,1)
	initGridComp(3,4)
	initGridComp(3,3)
	initGridComp(2,5)
	initGridComp(4,2)
	for i in range (10):
		print(gridComp[i]) # Affiche la grille de l'ordi ligne par ligne

def AddBoat_Play (l, c, d, t, b):
	global gridPlay

	for i in range (t) :
		if d == 1 :
			gridPlay[l][c+i] = b
		elif d == 2 :
			gridPlay[l+i][c] = b

def initGridPlay():
	global gridPlay

	h = 0
	while h < 5:
		if h == 0:
			b = [1, 'porte-avion']
			t = 5
		elif h == 1 :
			b = [2, "croiseur"]
			t = 4
		elif h == 2 :
			b = [3, "contre-torpilleur"]
			t = 3
		elif h == 3 :
			b = 4, "sous-marin"
			t = 3
		elif h == 4:
			b = [5, "torpilleur"]
			t = 2
		print("Vous placez un", b[1])
		l = int(input("Ligne"))
		c = int(input("Colonne"))
		d = int(input("Direction"))
		if PosOK(gridPlay,l,c,d,t) == True:
			AddBoat_Play(l, c, d, t, b[0])
			h += 1	

def PrintGridPlay():
	global gridPlay

	initGridPlay()
	for i in range (10):
		print(gridPlay[i])

#PrintGridPlay()

print("")
print("")

PrintGridComp()