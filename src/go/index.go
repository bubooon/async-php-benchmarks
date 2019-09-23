package main

import (
	"crypto/sha256"
	"encoding/hex"
	"fmt"
	"math/rand"
	"net/http"
)

func main() {
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {
		random := rand.Intn(10000)

		for i := 0; i < random; i++ {
		    str := fmt.Sprintf("%v%v%v", random, i, random)
			hash := sha256.Sum256([]byte(str))
			hex.EncodeToString(hash[:32])
		}

		fmt.Fprint(w, "Hello World!")
	})

	if err := http.ListenAndServe(":5000", nil); err != nil {
		panic(err)
	}
}
