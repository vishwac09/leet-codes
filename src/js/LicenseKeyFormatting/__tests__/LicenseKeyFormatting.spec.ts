import { licenseKeyFormatting } from '..';

describe('Problem license key formatting test', () => {
  test("Should return output '5F3Z-2E9W' for the given input", () => {
    expect(licenseKeyFormatting('5F3Z-2e-9-w', 4)).toBe('5F3Z-2E9W');
  });
  test("Should return output '2-5G-3J' for the given input", () => {
    expect(licenseKeyFormatting('2-5g-3-J', 2)).toBe('2-5G-3J');
  });
  test('Ramdom cases', () => {
    expect(licenseKeyFormatting('2', 2)).toBe('2');
    expect(licenseKeyFormatting('2-2-sw-w-w-w-w', 1)).toBe('2-2-S-W-W-W-W-W');
    expect(licenseKeyFormatting('2-4A0r7-4k', 4)).toBe('24A0-R74K');
    expect(licenseKeyFormatting('2-4A0r7-4k', 3)).toBe('24-A0R-74K');
    expect(licenseKeyFormatting('aaaa', 2)).toBe('AA-AA');
    expect(licenseKeyFormatting('r', 1)).toBe('R');
  });
});
