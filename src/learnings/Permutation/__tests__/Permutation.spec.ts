import { permutation } from '../index';

describe("Test cases to check permutation of string", () => {
  test("Should return all permutations of the given string", () => {
    expect(permutation("ab")).toBe("ab,ba");
  });
  test("Random cases", () => {
    expect(permutation("abc")).toBe("abc,acb,bac,bca,cba,cab");
  });
});
