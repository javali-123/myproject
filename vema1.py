import pandas as pd
from sklearn.tree import DecisionTreeClassifier
from sklearn.model_selection import train_test_split
from sklearn import metrics
col_names = ['Instances', 'at1', 'at2', 'at3', 'classifications']
fr = pd.read_csv("C:\\Users\\Maanas Sai\\Desktop\\vema.csv")
feature_cols = ['Instances', 'at1', 'at2', 'at3', 'classifications']
X = fr[feature_cols]
y = fr.classifications
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=1) 
clf = DecisionTreeClassifier(criterion="gini")
clf = clf.fit(X_train,y_train)
y_pred = clf.predict(X_test)
print("Accuracy:",metrics.accuracy_score(y_test, y_pred))
print(y_pred)
print(y_test)