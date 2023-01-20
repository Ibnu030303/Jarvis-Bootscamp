import React from "react";
import Navbar from "./navbar";
import Books from "./books";
import { useEffect, useState } from "react";
import axios from "axios";


const getBooks = async () => {
   const result = await axios('http://localhost:8000/api/books')
//    console.log(result.data.data) 
   setBooks(result.data.data) 
}