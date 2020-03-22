class Tri:
    

    
    def generer(self,taille):
        import random
        tableau = list()
        for i in range(taille):
            tableau.insert(i,random.randint(0,9999))
        return tableau

    def bulle(self,tableau):
        permutation = True
        passage = 0
        while permutation == True:
            permutation = False
            passage = passage + 1
            for en_cours in range(0, len(tableau) - passage):
                if tableau[en_cours] > tableau[en_cours + 1]:
                    permutation = True
                    # On echange les deux elements
                    tableau[en_cours], tableau[en_cours + 1] = \
                    tableau[en_cours + 1],tableau[en_cours]
        return tableau

    def insertion(self,tableau):
        for i in range(1,len(tableau)):
            en_cours = tableau[i]
            j = i
            #décalage des éléments du tableau }
            while j>0 and tableau[j-1]>en_cours:
                tableau[j]=tableau[j-1]
                j = j-1
            #on insère l'élément à sa place
            tableau[j]=en_cours
        return tableau
    def calcule(self,n):
        res =0
        for i in range(n):
            for j in range(n):
                res+=j
        return res